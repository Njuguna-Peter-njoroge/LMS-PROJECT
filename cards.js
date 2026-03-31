const courseImages = document.querySelectorAll('.course-img');

courseImages.forEach(img => {
    img.addEventListener('click', () => {
        const parent = img.parentElement;
        const title = parent.dataset.title;
        const description = parent.dataset.description;

        let descDiv = parent.querySelector('.course-description');
        if(descDiv) {
            descDiv.remove(); 
            return;
        }


        descDiv = document.createElement('div');
        descDiv.classList.add('course-description');
        descDiv.style.margin = '10px';
        descDiv.style.padding = '10px';
        descDiv.style.border = '1px solid #009393';
        descDiv.style.borderRadius = '5px';
        descDiv.style.backgroundColor = '#f0f9f9';
        descDiv.innerHTML = `<strong>${title}</strong><p>${description}</p>`;

        parent.appendChild(descDiv);
    });
});