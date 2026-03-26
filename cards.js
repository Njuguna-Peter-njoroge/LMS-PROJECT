// Select all course images
const courseImages = document.querySelectorAll('.course-img');

courseImages.forEach(img => {
    img.addEventListener('click', () => {
        const parent = img.parentElement;
        const title = parent.dataset.title;
        const description = parent.dataset.description;

        // Check if description already exists, toggle it
        let descDiv = parent.querySelector('.course-description');
        if(descDiv) {
            descDiv.remove(); // hide if already visible
            return;
        }

        // Create description div
        descDiv = document.createElement('div');
        descDiv.classList.add('course-description');
        descDiv.style.marginTop = '10px';
        descDiv.style.padding = '10px';
        descDiv.style.border = '1px solid #009393';
        descDiv.style.borderRadius = '5px';
        descDiv.style.backgroundColor = '#f0f9f9';
        descDiv.innerHTML = `<strong>${title}</strong><p>${description}</p>`;

        parent.appendChild(descDiv);
    });
});