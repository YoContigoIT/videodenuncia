import { PriorityLinesSockets } from "../agent/extras.js";
import { variables } from "./variables.js";

const { apiKey, apiURI } = variables;

const priorityLinesSockets = new PriorityLinesSockets({ apiURI, apiKey });

priorityLinesSockets.registerToPriorityLineUpdate(priorityLists => {
	console.log(priorityLists);

	let message = document.querySelector("#message");
	let table = document.querySelector("#table-cola");
	let tbody = document.querySelector("#table-cola tbody");
	let filas = document.querySelectorAll("#table-cola tbody tr");
	const count = priorityLists.filter(i => i).length;
	console.log(count);

	if (count >= 1) {
		message.classList.add("d-none");
		table.classList.remove("d-none");
		filas.forEach(row => {
			row.remove();
		});
		priorityLists.forEach((cola, i) => {
			cola.guests.forEach(dataGuest => {
				console.log(dataGuest.priority);
				let fila = document.createElement("tr");
				let td_1 = document.createElement("td");
				td_1.classList.add("text-center");
				let text_1 = document.createTextNode(dataGuest.details.folio);

				let td_2 = document.createElement("td");
				td_2.classList.add("text-center");
				let text_2 = document.createTextNode(
					dataGuest.guest.name.toUpperCase()
				);

				let td_3 = document.createElement("td");
				td_3.classList.add("text-center");
				let text_3 = document.createTextNode(
					dataGuest.guest.gender == "MALE" ? "MASCULINO" : "FEMENINO"
				);

				let td_4 = document.createElement("td");
				td_4.classList.add("text-center");
				let text_4 = document.createTextNode(
					dataGuest.guest.languages[0].title
				);

				let td_5 = document.createElement("td");
				td_5.classList.add("text-center");
				let text_5 = document.createTextNode(dataGuest.details.delito);

				let td_6 = document.createElement("td");
				td_6.classList.add("text-center");
				let text_priority = setPriority(dataGuest.priority);
				let text_6 = document.createTextNode(text_priority);

				let td_7 = document.createElement("td");
				td_7.classList.add("text-center");

				td_1.appendChild(text_1);
				td_2.appendChild(text_2);
				td_3.appendChild(text_3);
				td_4.appendChild(text_4);
				td_5.appendChild(text_5);
				td_6.appendChild(text_6);

				if (
					dataGuest.guestConnection.latitude &&
					dataGuest.guestConnection.longitude
				) {
					let a = document.createElement("a");
					a.setAttribute(
						"href",
						"https://www.google.com/maps/search/?api=1&query=" +
							dataGuest.guestConnection.latitude +
							"," +
							dataGuest.guestConnection.longitude +
							"&zoom=20"
					);
					a.setAttribute("target", "_blank");
					a.classList.add("btn");
					a.classList.add("btn-primary");
					let aTexto = document.createTextNode("UBICACIÓN");
					a.appendChild(aTexto);
					td_7.appendChild(a);
				} else {
					let aTexto = document.createTextNode("SIN UBICACIÓN");
					td_7.appendChild(aTexto);
				}

				fila.appendChild(td_1);
				fila.appendChild(td_2);
				fila.appendChild(td_3);
				fila.appendChild(td_4);
				fila.appendChild(td_5);
				fila.appendChild(td_6);
				fila.appendChild(td_7);

				tbody.appendChild(fila);
			});
			console.log(cola);
		});
	} else {
		message.classList.remove("d-none");
		table.classList.add("d-none");
		filas.forEach(row => {
			row.remove();
		});
	}
});

/**
 * Función que regresa el texto de prioridad
 */
function setPriority(num) {
	switch (num) {
		case "1":
			return "BAJA";
		case "2":
			return "MEDIA";
		case "3":
			return "ALTA";
		case num > "3":
			return "ALTA";
		default:
			return "DESCONOCIDO";
	}
}
