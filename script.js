document.getElementById('restoranForm').addEventListener('submit', function (e) {
  const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
  if (checkboxes.length === 0) {
    e.preventDefault();
    alert('Pilih minimal 1 menu!');
  }
});