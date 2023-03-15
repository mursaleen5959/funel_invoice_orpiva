const input_price = document.querySelectorAll('.input_price');
const input_subtotal = document.querySelector('.input_subtotal');
const input_total = document.querySelectorAll('.input_total');

let sum = 0;
input_price.forEach((inputPrice) => {
  const price = parseFloat(inputPrice.value) || 0;
  sum += price;
});
input_subtotal.value = sum;
input_total.forEach((inputTotal) => {
  inputTotal.value = sum;
});


input_price.forEach((inputPrice) => {
  inputPrice.addEventListener('input', () => {
    let newSum = 0;
    input_price.forEach((inputPrice) => {
      const price = parseFloat(inputPrice.value) || 0;
      newSum += price;
    });
    input_subtotal.value = newSum;

    input_total.forEach((inputTotal) => {
      inputTotal.value = newSum;
    });
  });
});
