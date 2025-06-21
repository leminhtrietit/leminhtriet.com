 document.addEventListener('DOMContentLoaded', (event) => {
            const footer = document.getElementById('floating-footer');

            // ** CẬP NHẬT: HÀM TÍNH TOÁN PADDING ĐỘNG **
            const setDynamicFooterPadding = () => {
                if (footer) {
                    const footerHeight = footer.offsetHeight;
                    // Thêm 16px (1rem) cho khoảng cách bottom-4 và 16px nữa làm khoảng đệm an toàn
                    document.body.style.paddingBottom = `${footerHeight + 16 + 16}px`;
                }
            };
            
            // --- FOOTER VISIBILITY ON SCROLL ---
            if (footer) {
                const checkScroll = () => {
                    const isScrollable = document.documentElement.scrollHeight > window.innerHeight;
                    // Thêm 1px buffer để chắc chắn hơn trên các trình duyệt khác nhau
                    const isAtBottom = (window.innerHeight + window.scrollY) >= (document.documentElement.scrollHeight - 1);
                    
                    if (!isScrollable || isAtBottom) {
                        footer.classList.remove('opacity-0', 'invisible');
                        footer.classList.add('opacity-100', 'visible');
                    } else {
                        footer.classList.remove('opacity-100', 'visible');
                        footer.classList.add('opacity-0', 'invisible');
                    }
                };
                
                // Lắng nghe window.onload để đảm bảo MỌI THỨ đã tải xong
                window.addEventListener('load', () => {
                    setDynamicFooterPadding();
                    checkScroll();
                });
                // Tính toán lại khi thay đổi kích thước cửa sổ
                window.addEventListener('resize', setDynamicFooterPadding);
                // Lắng nghe sự kiện cuộn
                window.addEventListener('scroll', checkScroll);
            }

            // ----- MÃ ĐIỀU KHIỂN HÀO QUANG THEO CHUỘT -----
            const trackables = document.querySelectorAll('.mouse-track-gradient');
            trackables.forEach(el => {
                el.addEventListener('mousemove', (e) => {
                    const rect = el.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    // Cập nhật biến CSS --x và --y cho hiệu ứng hào quang
                    el.style.setProperty('--x', `${x}px`);
                    el.style.setProperty('--y', `${y}px`);
                });
            });

          // ** CẬP NHẬT: TÍCH HỢP CÁC API **
            // 1. API Thời tiết
            async function fetchWeather(lat, lon) {
                // **QUAN TRỌNG:** Bạn cần đăng ký tài khoản miễn phí tại openweathermap.org 
                // và thay 'YOUR_API_KEY' bằng API key thật của bạn để tính năng này hoạt động.
                const apiKey = '617f1a0defe31a90811561b94f63c22a';
                
                if (apiKey === 'YOUR_API_KEY' || !apiKey) {
                    console.error("Vui lòng thay thế 'YOUR_API_KEY' bằng API key thật từ OpenWeatherMap.");
                    const weatherWidget = document.getElementById('weather-widget');
                    weatherWidget.querySelector('#weather-location').textContent = 'Lỗi Cấu hình';
                    weatherWidget.querySelector('#weather-desc').textContent = 'Cần API Key';
                    return;
                }

                const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=metric&lang=vi`;

                try {
                    const response = await fetch(url);
                    const data = await response.json();
                    
                    if (data.cod !== 200) {
                        throw new Error(data.message || 'Lỗi không xác định từ API thời tiết');
                    }
                    
                    if (data.main && data.weather && data.weather.length > 0) {
                        document.getElementById('weather-location').textContent = data.name;
                        document.getElementById('weather-temp').textContent = `${Math.round(data.main.temp)}°C`;
                        document.getElementById('weather-desc').textContent = data.weather[0].description;
                        
                        const iconCode = data.weather[0].icon;
                        const iconUrl = `https://openweathermap.org/img/wn/${iconCode}@4x.png`;
                        document.getElementById('weather-icon').innerHTML = `<img src="${iconUrl}" alt="Weather icon" class="w-24 h-24">`;
                    } else {
                         throw new Error('Dữ liệu thời tiết trả về không hợp lệ.');
                    }

                } catch (error) {
                    console.error("Lỗi khi lấy dữ liệu thời tiết:", error);
                    document.getElementById('weather-widget').innerHTML += '<p class="text-xs text-red-500 mt-2">Không thể tải dữ liệu thời tiết.</p>';
                }
            }

            // Hàm lấy vị trí người dùng
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            fetchWeather(position.coords.latitude, position.coords.longitude);
                        },
                        () => {
                            // Nếu người dùng từ chối, lấy thời tiết mặc định ở TPHCM
                            document.getElementById('weather-location').textContent = 'Quận 7, TP. Hồ Chí Minh';
                            fetchWeather(10.7769, 106.7009); 
                        }
                    );
                } else {
                     // Nếu trình duyệt không hỗ trợ, lấy thời tiết mặc định ở TPHCM
                     document.getElementById('weather-location').textContent = 'Quận 7, TP. Hồ Chí Minh';
                    fetchWeather(10.7769, 106.7009);
                }
            }

            // 2. Mô phỏng API Giá Vàng
            function fetchGoldPrices() {
                const goldWidget = document.getElementById('gold-price-widget');
                const mockData = [
                    { type: 'SJC', buy: '74,980', sell: '76,980', change: 'up' },
                    { type: 'Vàng 9999', buy: '72,500', sell: '74,100', change: 'down' }
                ];

                let html = '';
                mockData.forEach(gold => {
                    const changeIcon = gold.change === 'up' 
                        ? `<svg class="w-4 h-4 ml-1 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.28 9.22a.75.75 0 01-1.06-1.06l5.25-5.25a.75.75 0 011.06 0l5.25 5.25a.75.75 0 11-1.06 1.06L10.75 5.612V16.25A.75.75 0 0110 17z" clip-rule="evenodd" /></svg>`
                        : `<svg class="w-4 h-4 ml-1 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.97-3.618a.75.75 0 111.06 1.06l-5.25 5.25a.75.75 0 01-1.06 0l-5.25-5.25a.75.75 0 111.06-1.06l3.97 3.618V3.75A.75.75 0 0110 3z" clip-rule="evenodd" /></svg>`;
                    
                    html += `
                        <div class="flex justify-between items-center text-sm">
                            <span class="font-semibold text-gray-800">${gold.type}</span>
                            <div class="text-right">
                                <p class="text-gray-700">Mua: ${gold.buy}</p>
                                <p class="flex items-center justify-end">Bán: ${gold.sell} ${changeIcon}</p>
                            </div>
                        </div>`;
                });
                goldWidget.innerHTML = html;
            }

            // 3. Mô phỏng API Tin tức
            function fetchNews() {
                const newsWidget = document.getElementById('news-widget');
                const mockNews = [
                    { title: 'Microsoft tích hợp sâu Copilot vào Windows 12', desc: 'Trợ lý AI sẽ trở thành một phần không thể thiếu của hệ điều hành.', url: '#' },
                    { title: 'Google ra mắt mô hình Gemini 2.0', desc: 'Hứa hẹn một cuộc cách mạng mới trong tương tác giữa người và máy.', url: '#' },
                    { title: 'Làm sao để sử dụng AI tạo slide PowerPoint trong 5 phút?', desc: 'Khám phá các công cụ và mẹo giúp bạn tăng tốc công việc.', url: '#' },
                    { title: 'Xu hướng Web Design 2025: Glassmorphism lên ngôi', desc: 'Các nhà thiết kế đang hướng tới giao diện 3D mềm mại.', url: '#' }
                ];
                let html = '';
                mockNews.forEach(news => {
                    html += `
                        <a href="${news.url}" target="_blank" class="block p-4 rounded-lg bg-white/40 hover:bg-white/60 transition-colors border border-white/20">
                            <h4 class="font-semibold text-gray-800">${news.title}</h4>
                            <p class="text-xs text-gray-600 mt-1">${news.desc}</p>
                        </a>`;
                });
                newsWidget.innerHTML = html;
            }

            // Gọi các hàm để tải dữ liệu
            getLocation();
            fetchGoldPrices();
            fetchNews();
        });