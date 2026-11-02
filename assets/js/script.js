const filters = document.querySelectorAll('.filter');
    const products = document.querySelectorAll('.product');
    filters.forEach(button => button.addEventListener('click', () => {
      filters.forEach(item => item.classList.remove('active'));
      button.classList.add('active');
      const category = button.dataset.filter;
      products.forEach(product => product.hidden = category !== 'all' && product.dataset.category !== category);
    }));
    let count = 0;
    const toast = document.getElementById('toast');
    document.querySelectorAll('.add').forEach(button => button.addEventListener('click', () => {
      count++;
      document.getElementById('cartCount').textContent = count;
      toast.classList.add('show');
      window.clearTimeout(window.toastTimer);
      window.toastTimer = window.setTimeout(() => toast.classList.remove('show'), 1800);
    }));
    document.getElementById('menuToggle').addEventListener('click', () => {
      document.getElementById('mainNav').classList.toggle('open');
    });
    document.querySelectorAll('#mainNav a').forEach(link => link.addEventListener('click', () => {
      document.getElementById('mainNav').classList.remove('open');
    }));
