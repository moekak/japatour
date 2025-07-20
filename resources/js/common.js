const menuBtn = document.querySelector('button[aria-controls="mobile-menu"]');
const mobileMenu = document.getElementById('mobile-menu');

menuBtn.addEventListener('click', () => {
        const isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';
        menuBtn.setAttribute('aria-expanded', String(!isExpanded));

        if (isExpanded) {
            mobileMenu.classList.add('max-h-0', 'hidden');
            mobileMenu.classList.remove('max-h-96');
        } else {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.remove('max-h-0');
            mobileMenu.classList.add('max-h-96');
        }
});

const links = document.querySelectorAll('#mobile-menu a');

links.forEach(link => {
        link.addEventListener('click', () => {
            // メニューを閉じる（アニメーション付き）
            mobileMenu.classList.add('max-h-0');
            
            // ボタンの状態もリセット！
            menuBtn.setAttribute('aria-expanded', 'false');

            // 完全に非表示にする
            setTimeout(() => {
                    mobileMenu.classList.add('hidden');
            }, 300); // animation durationと合わせる
        });
});


// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                });
            }
    });
});