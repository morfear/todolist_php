const form = document.querySelector('#todoForm');
const todoInput = document.querySelector('#newTodo');
const todosInput = document.querySelector('#todos');
form.addEventListener('submit', e => {
	e.preventDefault();
	todosInput.value = JSON.stringify([...document.querySelectorAll('#todoList li span')].map(span => span.textContent));
	})