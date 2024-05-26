document.addEventListener('DOMContentLoaded', (event) => {
    loadPage(1); // Load page 1 by default
});

function loadPage(pageNumber) {
    const productContainer = document.getElementById('product-container');
    productContainer.innerHTML = ''; // Clear the existing content

    // Sample data for different pages (you can replace this with actual data from your server or database)
    const products = {
        1: [
            { title: 'Product 1', text: 'Description for Product 1', img: 'img/mock-up1.jpg' },
            { title: 'Product 2', text: 'Description for Product 2', img: 'img/mock-up1.jpg' },
            { title: 'Product 3', text: 'Description for Product 3', img: 'img/mock-up1.jpg' }
        ],
        2: [
            { title: 'Product 4', text: 'Description for Product 4', img: 'img/mock-up1.jpg' },
            { title: 'Product 5', text: 'Description for Product 5', img: 'img/mock-up1.jpg' },
            { title: 'Product 6', text: 'Description for Product 6', img: 'img/mock-up1.jpg' }
        ],
        3: [
            { title: 'Product 7', text: 'Description for Product 7', img: 'img/mock-up1.jpg' },
            { title: 'Product 8', text: 'Description for Product 8', img: 'img/mock-up1.jpg' },
            { title: 'Product 9', text: 'Description for Product 9', img: 'img/mock-up1.jpg' }
        ]
    };

    products[pageNumber].forEach(product => {
        const colDiv = document.createElement('div');
        colDiv.className = 'col-md-3';
        colDiv.innerHTML = `
            <div class="card-md">
                <img src="${product.img}" class="card-img-top" alt="..." width="10" height="200">
                <div class="card-body">
                    <h5 class="card-title">${product.title}</h5>
                    <p class="card-text">${product.text}</p>
                    <div class="row text-center">
                        <div class="col">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        `;
        productContainer.appendChild(colDiv);
    });

    // Update active page
    const paginationItems = document.querySelectorAll('.page-item');
    paginationItems.forEach(item => item.classList.remove('active'));
    paginationItems[pageNumber - 1].classList.add('active');
}
