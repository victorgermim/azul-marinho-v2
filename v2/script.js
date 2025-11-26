document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.scroll-container');
    const card = document.querySelector('.scroll-card');
    const header = document.querySelector('.scroll-header');
    
    // Check if mobile
    let isMobile = window.innerWidth <= 768;
    window.addEventListener('resize', () => {
        isMobile = window.innerWidth <= 768;
    });

    function mapRange(value, inMin, inMax, outMin, outMax) {
        return ((value - inMin) * (outMax - outMin)) / (inMax - inMin) + outMin;
    }

    function handleScroll() {
        if (!container || !card) return;

        const scrollY = window.scrollY;
        const viewportHeight = window.innerHeight;
        
        // We want the animation to start at scroll 0 (tilted) and end after scrolling down a bit (flat).
        // Let's say the animation completes when we've scrolled 60% of the viewport height.
        const scrollDistance = viewportHeight * 0.6;
        
        let progress = scrollY / scrollDistance;
        progress = Math.max(0, Math.min(1, progress));

        // Apply transforms
        // Rotate: 20deg -> 0deg
        // At scroll 0 (progress 0), we want 20deg.
        // At scroll end (progress 1), we want 0deg.
        const rotateX = mapRange(progress, 0, 1, 20, 0);
        
        // Scale: 
        // Desktop: 1.05 -> 1
        // Mobile: 0.7 -> 0.9 (Wait, the original code said [0.7, 0.9] for mobile? 
        // "isMobile ? [0.7, 0.9] : [1.05, 1]"
        // So mobile starts small (0.7) and grows (0.9).
        // Desktop starts big (1.05) and shrinks (1).
        
        const scaleStart = isMobile ? 0.7 : 1.05;
        const scaleEnd = isMobile ? 0.9 : 1.0;
        const scale = mapRange(progress, 0, 1, scaleStart, scaleEnd);
        
        // Translate Header: 0 -> -100px
        // As we scroll down, the header moves up faster (parallax/fade out feel)
        const translateY = mapRange(progress, 0, 1, 0, -100);

        // Apply styles
        // Ensure perspective is set on the parent or the element itself
        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) scale(${scale})`;
        
        if (header) {
            header.style.transform = `translateY(${translateY}px)`;
        }
    }

    window.addEventListener('scroll', () => {
        window.requestAnimationFrame(handleScroll);
    });
    
    // Initial call
    handleScroll();

    // Header Interaction Logic
    const nav = document.querySelector('.navbar-pill');
    const menuItems = document.querySelectorAll('.menu-item');

    if (nav && menuItems.length > 0) {
        menuItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                // Remove active from all others
                menuItems.forEach(i => i.classList.remove('active'));
                // Add active to current
                item.classList.add('active');
            });
        });

        nav.addEventListener('mouseleave', () => {
            menuItems.forEach(i => i.classList.remove('active'));
        });
    }

    // Scroll Expand Media Logic
    const expandSection = document.querySelector('.expand-section');
    const expandMedia = document.querySelector('.expand-media-container');
    const expandBg = document.querySelector('.expand-bg');
    const expandTitleLeft = document.querySelector('.expand-title-left');
    const expandTitleRight = document.querySelector('.expand-title-right');
    const expandContent = document.querySelector('.expand-content');
    const expandOverlay = document.querySelector('.expand-overlay');
    const expandInnerText = document.querySelector('.expand-inner-text');

    function handleExpandScroll() {
        if (!expandSection) return;

        const rect = expandSection.getBoundingClientRect();
        const viewportHeight = window.innerHeight;
        const sectionHeight = expandSection.offsetHeight;
        
        // Calculate progress: 0 when top of section hits top of viewport, 1 when bottom of section hits bottom of viewport
        // Actually, since it's sticky, we want progress based on how far we've scrolled INTO the section.
        // The sticky container stays fixed for (sectionHeight - viewportHeight) pixels.
        
        const scrollDistance = sectionHeight - viewportHeight;
        const scrolled = -rect.top; // How far the top of the section is above the viewport top
        
        let progress = scrolled / scrollDistance;
        progress = Math.max(0, Math.min(1, progress));

        // Media Expansion
        // Width: 300px -> 95vw (approx 1400px or window width)
        // Height: 400px -> 85vh
        
        const startWidth = 300;
        const endWidth = window.innerWidth * 0.95;
        const startHeight = 400;
        const endHeight = window.innerHeight * 0.85;

        const currentWidth = mapRange(progress, 0, 1, startWidth, endWidth);
        const currentHeight = mapRange(progress, 0, 1, startHeight, endHeight);

        if (expandMedia) {
            expandMedia.style.width = `${currentWidth}px`;
            expandMedia.style.height = `${currentHeight}px`;
        }

        // Text Split
        // Move left title left, right title right
        const translateX = mapRange(progress, 0, 1, 0, isMobile ? 180 : 400); // px
        
        if (expandTitleLeft) expandTitleLeft.style.transform = `translateX(-${translateX}px)`;
        if (expandTitleRight) expandTitleRight.style.transform = `translateX(${translateX}px)`;

        // Opacity Fades
        // Background fades out
        if (expandBg) expandBg.style.opacity = 1 - progress;
        
        // Inner text fades out quickly
        if (expandInnerText) expandInnerText.style.opacity = 1 - (progress * 3); // Fades out in first 33%

        // Overlay fades out
        if (expandOverlay) expandOverlay.style.opacity = 0.3 - (progress * 0.3);

        // Content fades in at the end (last 25%)
        if (expandContent) {
            if (progress > 0.75) {
                const contentOpacity = mapRange(progress, 0.75, 1, 0, 1);
                expandContent.style.opacity = contentOpacity;
                expandContent.style.pointerEvents = 'auto';
            } else {
                expandContent.style.opacity = 0;
                expandContent.style.pointerEvents = 'none';
            }
        }
    }

    window.addEventListener('scroll', () => {
        window.requestAnimationFrame(handleExpandScroll);
    });
    handleExpandScroll(); // Initial call
});
