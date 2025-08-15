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

          

           
            // Gọi các hàm để tải dữ liệu
           
        }
    
    
    
    );
document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('lights-container');
            if (!container) return;

            // Bảng màu lấy từ mycolor.space dựa trên màu chủ đạo #272A74
            // Thầy có thể thêm/bớt/thay đổi các màu này tùy ý
            const colorPalette = [
                '#272A74', // Màu chủ đạo
                '#52559B', // Analogous
                '#7C80C2', // Analogous
                '#A7ABEA', // Lighter shade
                '#a73f3d', // Lighter shade
                '#005a37', // Lighter shade

                '#79b5bb', // Màu header thầy đã dùng
                '#4A5568'  // Gray-blue
            ];
            
            const particleCount = 100; // Số lượng hạt cát, thầy có thể tăng/giảm

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('span');
                particle.className = 'particle';

                // --- Random hóa các thuộc tính để tạo sự tự nhiên ---

                // Kích thước ngẫu nhiên
                const size = Math.random() * 3 + 1; // từ 1px đến 4px
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;

                // Vị trí bắt đầu ngẫu nhiên theo chiều ngang
                particle.style.left = `${Math.random() * 100}%`;

                // Thời gian bay ngẫu nhiên
                const duration = Math.random() * 15 + 10; // từ 10s đến 25s
                particle.style.animationDuration = `${duration}s`;

                // Thời gian chờ trước khi bay (để các hạt không xuất hiện cùng lúc)
                const delay = Math.random() * 15; // chờ tối đa 15s
                particle.style.animationDelay = `${delay}s`;

                // Độ lệch ngang cuối cùng (hiệu ứng gió thổi)
                const xDrift = Math.random() * 200 - 100; // lệch từ -100px đến +100px
                particle.style.setProperty('--x-drift', `${xDrift}px`);

                // Chọn 2 màu ngẫu nhiên từ bảng màu
                const color1 = colorPalette[Math.floor(Math.random() * colorPalette.length)];
                const color2 = colorPalette[Math.floor(Math.random() * colorPalette.length)];
                particle.style.setProperty('--color1', color1);
                particle.style.setProperty('--color2', color2);

                container.appendChild(particle);
            }
        });
