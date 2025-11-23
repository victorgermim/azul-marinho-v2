(function() {
    // Helper to force reflow
    const forceReflow = (el) => el.offsetHeight;

    // 1. Initialize State
    // We add the class immediately to ensure the initial state is rendered before the user sees anything else.
    document.body.classList.add('hero-animating');
    window.scrollTo(0, 0);

    window.addEventListener('load', () => {
        const plate = document.getElementById('hero-plate');
        const heroSection = document.getElementById('hero-section');

        if (!plate || !heroSection) {
            console.warn('Hero animation elements not found.');
            document.body.classList.remove('hero-animating');
            return;
        }

        // Wait for the initial "Loading" phase (spin)
        setTimeout(() => {
            // 2. Prepare for FLIP (First - Last - Invert - Play)
            
            // FIRST: Get the current position (Fixed Center)
            const firstRect = plate.getBoundingClientRect();
            
            // Stop the rotation (freeze it at current angle or reset? User said "desacelera", but CSS animation is hard to stop smoothly without complex JS. 
            // We will just remove the animation class, which resets rotation to 0 if not handled carefully.
            // To make it smooth, we might want to capture the current rotation, but for simplicity and robustness, we'll let it reset or just transition.
            // The CSS 'transition' will handle the transform change.
            
            // LAST: Remove the class to let the layout calculate the final position
            document.body.classList.remove('hero-animating');
            
            // We need to force a layout update to get the new position, BUT we don't want the user to see the jump.
            // However, removing the class also reveals the background and other elements (though text has delay).
            // The plate will jump to the new position immediately if we don't intervene.
            
            const lastRect = plate.getBoundingClientRect();
            
            // INVERT: Calculate the difference
            const deltaX = firstRect.left - lastRect.left;
            const deltaY = firstRect.top - lastRect.top;
            
            // Calculate scale difference (First was 0.8, Last is 1.0 usually)
            // We know First was scale(0.8). We need to calculate the visual width ratio.
            const scaleChange = firstRect.width / lastRect.width; 

            // Apply the inversion transform (put it back to where it was)
            // Note: We are ignoring rotation here, so it might snap to 0 rotation. 
            // If we want to keep rotation, it's complex. Let's assume snapping to 0 rotation is acceptable or part of the "landing".
            
            plate.style.transition = 'none';
            plate.style.transform = `translate(${deltaX}px, ${deltaY}px) scale(${scaleChange})`;
            
            // Force Reflow
            forceReflow(plate);
            
            // PLAY: Enable transition and remove the transform
            // We use a slight timeout to ensure the browser registers the 'none' transition state first
            requestAnimationFrame(() => {
                plate.style.transition = 'transform 1.5s cubic-bezier(0.22, 1, 0.36, 1)';
                plate.style.transform = 'translate(0, 0) scale(1)';
            });

            // The CSS transition delays will handle the text reveal.

        }, 2000); // 2 seconds loading phase
    });
})();
