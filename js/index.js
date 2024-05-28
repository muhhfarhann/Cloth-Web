document.getElementById('chart').addEventListener('click', function() {
    document.getElementById('chart-list').classList.toggle('active');
});

document.getElementById('close-chart').addEventListener('click', function() {
    document.getElementById('chart-list').classList.remove('active');
});

// Function to add an item to the chart list for demonstration
function addItemToChart(name, price, imageUrl) {
    const itemRow = document.createElement('div');
    itemRow.className = 'row';
  
    const itemImageCol = document.createElement('div');
    itemImageCol.className = 'col';
    const itemImage = document.createElement('img');
    itemImage.src = imageUrl;
    itemImage.alt = name;
    itemImage.width = 50;
    itemImage.height = 50;
    itemImageCol.appendChild(itemImage);
  
    const itemDetailsCol = document.createElement('div');
    itemDetailsCol.className = 'col';
    const itemName = document.createElement('h5');
    itemName.textContent = name;
    const itemPrice = document.createElement('p');
    itemPrice.textContent = `$${price}`;
    itemDetailsCol.appendChild(itemName);
    itemDetailsCol.appendChild(itemPrice);
  
    itemRow.appendChild(itemImageCol);
    itemRow.appendChild(itemDetailsCol);
  
    document.querySelector('.chart-items').appendChild(itemRow);
  }

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

document.addEventListener('DOMContentLoaded', function() {
    const checkBank = document.getElementById('checkBank');
    const checkPay = document.getElementById('checkPay');
    const checkCod = document.getElementById('checkCod');
    const checkPal = document.getElementById('checkPal');

    checkBank.addEventListener('change', function() {
        showAlert('checkBank');
    });

    checkPay.addEventListener('change', function() {
        showAlert('checkPay');
    });

    checkCod.addEventListener('change', function() {
        showAlert('checkCod');
    });

    checkPal.addEventListener('change', function() {
        showAlert('checkPal');
    });
});

function showAlert(radioId) {
    const alertContainer = document.getElementById('alert-container');
    let message = '';

    if (radioId === 'checkBank') {
        message = 'Make your payment directly into our bank account!';
    } else if (radioId === 'checkPay') {
        message = 'Please check field!';
    } else if (radioId === 'checkCod') {
        message = 'Pay With Cash Upon Delivery';
    }else if (radioId === 'checkPal') {
        message = 'Pay with paypal you can pay with yout credit card if you dont have paypall account';
    }

    alertContainer.innerHTML = `
        <div class="alert alert-danger" role="alert">
            ${message}
        </div>
    `;
}