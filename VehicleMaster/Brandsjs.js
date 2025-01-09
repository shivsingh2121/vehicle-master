document.getElementById('addBrandForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const newBrand = document.getElementById('newBrand').value;
    const brandList = document.getElementById('brandList');

    if (newBrand) {
       
        const li = document.createElement('li');
        li.textContent = newBrand;
        brandList.appendChild(li);

        document.getElementById('newBrand').value = "";
    }
});
