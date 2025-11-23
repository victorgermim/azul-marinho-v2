(function () {
    // Helper to force reflow
    const forceReflow = (el) => el.offsetHeight;

    // 1. Initialize State immediately
    document.body.classList.add('hero-animating');
    window.scrollTo(0, 0);

    window.addEventListener('load', () => {
        const originalPlate = document.getElementById('hero-plate');
        const heroSection = document.getElementById('hero-section');

        if (!originalPlate || !heroSection) {
            console.warn('Hero animation elements not found.');
            document.body.classList.remove('hero-animating');
            return;
        }

        // Hide original plate visually
        originalPlate.style.opacity = '0';

        // Create Clone
        const clone = originalPlate.cloneNode(true);
        clone.id = 'hero-plate-clone';
        clone.classList.add('hero-clone');

        // Append to body
        document.body.appendChild(clone);

        // Apply styles to Clone (Fixed Center)
        // INCREASED SIZE as requested
        Object.assign(clone.style, {
            position: 'fixed',
            top: '50%',
            left: '50%',
            // We use transform for centering AND rotation (via class)
            // Initial transform is handled by the keyframes 'from' state or class
            // But we set a base here just in case
            transform: 'translate(-50%, -50%)',
            zIndex: '10000',
            width: '60vw',         // Increased from 45vw
            maxWidth: '650px',     // Increased from 500px
            height: 'auto',
            transition: 'top 1.5s cubic-bezier(0.22, 1, 0.36, 1), left 1.5s cubic-bezier(0.22, 1, 0.36, 1), width 1.5s cubic-bezier(0.22, 1, 0.36, 1)',
            opacity: '1',
            visibility: 'visible'
        });

        // Add rotation class immediately
        clone.classList.add('rotating');

        // 2. The Animation Sequence
        setTimeout(() => {
            // Calculate final position of the original plate
            const targetRect = originalPlate.getBoundingClientRect();

            // FLIP Logic:
            // We want to move the clone to the target position.
            // Since the clone has 'transform: translate(-50%, -50%)' (due to the rotation animation keyframes),
            // we must position its 'top' and 'left' at the CENTER of the target rect.

            const targetCenterX = targetRect.left + (targetRect.width / 2);
            const targetCenterY = targetRect.top + (targetRect.height / 2);

            // Apply new position and size
            // We DO NOT remove the 'rotating' class, so it keeps spinning.
            // We DO NOT touch 'transform', so the spin animation continues.

            clone.style.top = `${targetCenterY}px`;
            clone.style.left = `${targetCenterX}px`;
            clone.style.width = `${targetRect.width}px`;
            clone.style.maxWidth = 'none'; // Allow it to shrink to exact size

            // 3. Finalization
            const onTransitionEnd = () => {
                // Remove clone
                clone.remove();

                // Show original (which is already spinning via CSS)
                originalPlate.style.opacity = '1';

                // Remove body class
                document.body.classList.remove('hero-animating');

                // Reveal Hero Section (Background expansion)
                heroSection.classList.add('hero-reveal');
            };

            // Listen for transition end (width is a good proxy)
            clone.addEventListener('transitionend', (e) => {
                if (e.propertyName === 'width') onTransitionEnd();
            }, { once: true });

            // Fallback
            setTimeout(onTransitionEnd, 1600);

        }, 2000); // 2 seconds loading phase
    });
})();
