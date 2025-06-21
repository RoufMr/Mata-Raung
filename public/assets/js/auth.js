document.addEventListener('DOMContentLoaded', function() {
    // Background Slider
    const backgrounds = [
        'url(assets/img/slider/raung-home.jpg)',
        'url(assets/img/slider/raung-home2.png)',
        'url(assets/img/slider/raung-home3.jpg)',
    ];
    
    const slider = document.querySelector('.background-slider');
    if (slider) {
        let current = 0;
        slider.style.backgroundImage = backgrounds[current];
        slider.classList.add('active');
        
        setInterval(() => {
            current = (current + 1) % backgrounds.length;
            slider.style.opacity = 0;
            
            setTimeout(() => {
                slider.style.backgroundImage = backgrounds[current];
                slider.style.opacity = 1;
            }, 1500);
        }, 5000);
    }
    
    // Password toggle for all password inputs
    document.querySelectorAll('.password-toggle').forEach(toggle => {
        toggle.addEventListener('click', function() {
            const input = this.previousElementSibling;
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    });
});