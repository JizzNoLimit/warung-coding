const tambahBtn = document.querySelector('.btn-tambah')
const closeBtn = document.querySelector('.batal');
const layer = document.querySelector('.form__wraper'); 
const form = document.querySelector('.form__produk'); 

tambahBtn.addEventListener('click', () => {
    layer.classList.add('active')
    form.classList.add('active')
})

layer.addEventListener('click', () => {
    layer.classList.remove('active')
    form.classList.remove('active')
})