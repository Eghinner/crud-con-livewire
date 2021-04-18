const tareas = document.getElementById('dragon');

Sortable.create(tareas, {
	group: {
		name: "lista-tarreas"
	},
	animation: 350, 
	easing: "cubic-bezier(0.64, 0, 0.78, 0)",
	handle: ".fas",
	// ghostClass: "active",
	// chosenClass: "",
	draggClass: "invisible",
	store: {
		get: function (sortable) {
			var order = localStorage.getItem(sortable.options.group.name);
			return order ? order.split('|') : [];
		},
		set: function (sortable) {
			var order = sortable.toArray();
			localStorage.setItem(sortable.options.group.name, order.join('|'));
		}
	}
});