import { VideoServiceGuest } from "../guest/guest.js";
import { variables } from "./variables.js";

const { apiKey, apiURI, urlApp } = variables;
const guestUUID = document.getElementById("input_uuid").value;

const delito = document.getElementById("input_delito").value;
const descripcion = document.getElementById("input_descripcion").value;
const texto_inicial = document.querySelector("#pantalla_inicial");
const priority = document.querySelector("#input_priority").value;
const video_container = document.querySelector("#video_container");
const pantalla_final = document.querySelector("#pantalla_final");
const pantalla_error = document.querySelector("#pantalla_error");

// NETWORK QUALITY SIGNAL
const networkQualitySignalButton = document.getElementById("network_quality_signal");
const toastGuest = document.getElementById("toast_guest");

const agente_name = document.querySelector("#main_video_details_name");

let folio_completo = document.getElementById("input_folio").value;
let array = folio_completo.split("-");
let folio_SY = array[1];
let year_SF = array[0];
var intervalo = setInterval(function () {
	location.reload();
}, 90000);
var checkPriorityLine;

// VIDEO Y AUDIO DE AGENTE SELECTER
const mediaDevicesModal = document.getElementById("media_devices_modal");
const mediaConfiguration = document.getElementById("media_configuration");
const $listaDeDispositivosVideo = document.querySelector(
	"#listaDeDispositivosVideo"
);
const $listaDeDispositivosAudio = document.querySelector(
	"#listaDeDispositivosAudio"
);
const $video = document.querySelector("#video");
const $audio = document.querySelector("#audio");
const $acceptConfiguration = document.querySelector("#acceptConfiguration");
let videoStream;
let audioStream;

// const recording = document.querySelector('#recording');
// const recording_stop = document.querySelector('#recording_stop');
// const video = document.querySelector('#togogle-video');
// const audio = document.querySelector('#toogle-audio');
// const audio_denunciante_prendido = document.querySelector('#audio_denunciante_prendido');
// const audio_denunciante_apagado = document.querySelector('#audio_denunciante_apagado');
// const camara_apagada_denunciante = document.querySelector('#camara_apagada_denunciante');
// const camara_prendida_denunciante = document.querySelector('#camara_prendida_denunciante');
// const denunciante_name = document.querySelector('#secondary_video_name');
// const audio_denunciante_prendido_b = document.querySelector('#audio_denunciante_prendido_b');
// const audio_denunciante_apagado_b = document.querySelector('#audio_denunciante_apagado_b');
// const camara_apagada_denunciante_b = document.querySelector('#camara_apagada_denunciante_b');
// const camara_prendida_denunciante_b = document.querySelector('#camara_prendida_denunciante_b');

const guestVideoService = new VideoServiceGuest(
	guestUUID,
	folio_SY + "/" + year_SF,
	priority,
	{ apiURI, apiKey }
);

guestVideoService.registerOnVideoReady(
	"secondary_video",
	"main_video",
	(response, guestData) => {
		clearInterval(intervalo);
		texto_inicial.style.display = "none";
		video_container.style.display = "block";
		clearInterval(intervalo);
		document.querySelector("#documentos_anexar_card").style.display =
			"block";
		agente_name.innerHTML = "LIC. " + response.agent.name;
		// denunciante_name.innerHTML = guestData.name;

		guestVideoService.registerOnNewtworkQualityChanged((event) => {
			const signal = createSignalLevel(event.newValue);
			networkQualitySignalButton.classList.remove("d-none");
			networkQualitySignalButton.innerHTML = signal;
		});
	}
);

function createSignalLevel(levelSignal) {
	const signalDetails = getColorSignal(levelSignal);
	
	return `<i class="bi bi-reception-${signalDetails.levelSignal}" style="color: ${signalDetails.colorSignal}"></i>`;
}

function getColorSignal(levelSignal){
	let colorSignal;

	switch(levelSignal) {
		case 5:
			levelSignal = 4;
			colorSignal = 'green';
			break;
		case 4:
			levelSignal = 3;
			colorSignal = 'green';
			break;
		case 3: case 2:
			levelSignal = 2;
			colorSignal = 'yellow';
			// $(toastGuest).toast('show');
			// turnOffCamera();
			break;
		case 1:
			colorSignal = 'red';
			$(toastGuest).toast('show');
			// turnOffCamera();
			break;
		case 0:
			colorSignal = 'red';
			$(toastGuest).toast('show');
			// turnOffCamera();
			break;
		default:
			levelSignal = 0;
	}

	return {
		levelSignal: levelSignal,
		colorSignal: colorSignal,
	}
}

function turnOffCamera() {
	setTimeout(() => {
		guestVideoService.toggleRemoteVideoFailConection(IsEnabled => {});
	}, 3000);
}

guestVideoService.registerRefreshGuestConnection(() => {
	Swal.fire({
		position: "top-end",
		title:
			"La conexión se recargara dentro de 3 segundos, mantente conectado",
		showConfirmButton: false,
		icon: "info",
		timer: 3000,
		timerProgressBar: true
	}).then(() => {
		location.reload();
	});
});

guestVideoService.registerOnDisconnect(e => {
	console.log("Desconectado", e);
	pantalla_final.style.display = "block";
	video_container.style.display = "none";
	document.querySelector("#documentos_anexar_card").style.display = "none";
	Swal.fire({
		title: "Llamada finalizada, ¿Deseas cerrar tu sesión?",
		showCancelButton: true,
		confirmButtonColor: "#bf9b55",
		confirmButtonText: "Aceptar",
		cancelButtonText: "Cancelar",
		timer: 10000,
		timerProgressBar: true
	}).then(result => {
		if (result.dismiss === Swal.DismissReason.cancel) {
			console.log("Has hecho click en el botón cancelar");
		} else if (result.dismiss === Swal.DismissReason.backdrop) {
			console.log("Has hecho click fuera del modal");
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					// Maneja la respuesta del servidor aquí
				}
			};
			xhttp.open("GET", "../logout", true);
			xhttp.send();
			window.location.href = urlApp;
		} else {
			console.log("Has hecho click en el botón aceptar");
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					// Maneja la respuesta del servidor aquí
				}
			};
			xhttp.open("GET", "../logout", true);
			xhttp.send();
			window.location.href = urlApp;
		}
	});
});

guestVideoService.registerMediaRemoteToggling(response => {
	// if (response.hasOwnProperty('toogleVideoGuest')) {
	// 	// Verify if response.toogleVideoGuest is true/false
	// 	if (response.toogleVideoGuest == true) {
	// 		camara_prendida_denunciante.style.display = "block"
	// 		camara_apagada_denunciante.style.display = "none"
	// 		camara_prendida_denunciante_b.style.display = "block"
	// 		camara_apagada_denunciante_b.style.display = "none"
	// 	} else {
	// 		camara_prendida_denunciante.style.display = "none"
	// 		camara_apagada_denunciante.style.display = "block"
	// 		camara_prendida_denunciante_b.style.display = "none"
	// 		camara_apagada_denunciante_b.style.display = "block"
	// 	}
	// } else if (response.hasOwnProperty('toogleAudioGuest')) {
	// 	// Verify if response.toogleAudioGuest is true/false
	// 	if (response.toogleAudioGuest == true) {
	// 		audio_denunciante_prendido.style.display = "block"
	// 		audio_denunciante_apagado.style.display = "none"
	// 		audio_denunciante_prendido_b.style.display = "block"
	// 		audio_denunciante_apagado_b.style.display = "none"
	// 	} else {
	// 		audio_denunciante_prendido.style.display = "none"
	// 		audio_denunciante_apagado.style.display = "block"
	// 		audio_denunciante_prendido_b.style.display = "none"
	// 		audio_denunciante_apagado_b.style.display = "block"
	// 	}
	// }
});

guestVideoService.registerVideoRecordingStatus(isRecording => {
	console.log("isRecording", isRecording);
	if (isRecording) {
		Swal.fire({
			title: "Se inicio la grabación.",
			position: "top-end",
			showConfirmButton: false,
			timer: 1500,
			timerProgressBar: true
		});
	} else {
		Swal.fire({
			position: "top-end",
			title: "Se detuvo la grabación.",
			showConfirmButton: false,
			timer: 1500,
			timerProgressBar: true
		});
	}
});

guestVideoService.registerOnAgentDisconnected(() => {
	console.log("Agent disconnected");
	// Swal.fire({
	// 	position: "top-end",
	// 	title: "El agente se desconecto.",
	// 	showConfirmButton: false,
	// 	timer: 1500,
	// 	timerProgressBar: true,
	// });
	pantalla_final.style.display = "block";
	video_container.style.display = "none";
	document.querySelector("#documentos_anexar_card").style.display = "none";
});

guestVideoService.registerOnGuestConnected(() => {
	clearInterval(checkPriorityLine);
});

$acceptConfiguration.addEventListener("click", () => {
	if (!audioStream) return;
	if (!videoStream) return;

	audioStream.getTracks().forEach(function (track) {
		track.stop();
	});

	videoStream.getTracks().forEach(function (track) {
		track.stop();
	});

	$(mediaDevicesModal).modal("hide");

	try {
		guestVideoService.connectGuest(
			{ delito, folio: folio_SY + "/" + year_SF, descripcion },
			guest => {
				console.log("Denuciante conectado");
				clearInterval(intervalo);
				checkPriorityLine = setInterval(() => {
					guestVideoService.checkPriorityLine(guest.uuid, response => {
						if (response !== true) {
							console.log('not-queue');
							checkPriorityLine = setInterval(() => {
								location.reload();
							}, 90000);
						} else {
							console.log('guest-in-queue');
						}
					});
				}, 9000);
				console.log(guest);
			},
			onerror => {
				Swal.fire({
					icon: "error",
					title: "Hubo un error, se recargará la página.",
					showConfirmButton: false,
					timer: 1000,
					timerProgressBar: true
				}).then(result => {
					location.reload;
				});
			},
			ondisconnect => {
				guestVideoService.disconnectGuest(() => {
					"SERVER ERROR - ¡Denunciante desconectado con éxito!"
				});
				// Swal.fire({
				// 	icon: "error",
				// 	title: "Hubo una desconexión, se recargará la página.",
				// 	showConfirmButton: false,
				// 	timer: 1000,
				// 	timerProgressBar: true,
				// }).then(result => {
				// 	location.reload;
				// });
			}
		);
	} catch (error) {
		console.log("Acceso a cámara y audio denegado");
		texto_inicial.style.display = "none";
		pantalla_error.style.display = "block";
		video_container.style.display = "none";
		document.querySelector("#documentos_anexar_card").style.display =
			"none";
	}
});

const llenarSelectConDispositivosDisponiblesVideo = idDeDispositivo => {
	if ($listaDeDispositivosVideo.length) $($listaDeDispositivosVideo).empty();

	navigator.mediaDevices.enumerateDevices().then(function (dispositivos) {
		const dispositivosDeVideo = [];
		dispositivos.forEach(function (dispositivo) {
			const tipo = dispositivo.kind;

			if (tipo === "videoinput") {
				dispositivosDeVideo.push(dispositivo);
			}
		});

		if (dispositivosDeVideo.length > 0) {
			dispositivosDeVideo.forEach(dispositivo => {
				const option = document.createElement("option");
				option.value = dispositivo.deviceId;
				option.text = dispositivo.label;
				if (dispositivo.deviceId === idDeDispositivo) {
					option.selected = true;
				}
				$listaDeDispositivosVideo.appendChild(option);
			});
		}
	});
};

const llenarSelectConDispositivosDisponiblesAudio = idDeDispositivo => {
	$($listaDeDispositivosAudio).empty();

	navigator.mediaDevices.enumerateDevices().then(function (dispositivos) {
		const dispositivosDeAudio = [];
		dispositivos.forEach(function (dispositivo) {
			const tipo = dispositivo.kind;

			if (tipo === "audioinput") {
				dispositivosDeAudio.push(dispositivo);
			}
		});

		if (dispositivosDeAudio.length > 0) {
			dispositivosDeAudio.forEach(dispositivo => {
				const option = document.createElement("option");
				option.value = dispositivo.deviceId;
				option.text = dispositivo.label;
				if (dispositivo.deviceId === idDeDispositivo) {
					option.selected = true;
				}
				$listaDeDispositivosAudio.appendChild(option);
			});
		}
	});
};

const llenarSelectConDispositivosDisponiblesVideoIOS = () => {
	navigator.mediaDevices.enumerateDevices().then(function (dispositivos) {
		const dispositivosDeVideo = [];
		dispositivos.forEach(function (dispositivo) {
			const tipo = dispositivo.kind;
			if (tipo === "videoinput") {
				dispositivosDeVideo.push(dispositivo);
			}
		});

		if (dispositivosDeVideo.length > 0) {
			dispositivosDeVideo.forEach(dispositivo => {
				const option = document.createElement("option");
				option.value = dispositivo.deviceId;
				option.text = dispositivo.label;
				$listaDeDispositivosVideo.appendChild(option);
			});
		}
	});
};
const llenarSelectConDispositivosDisponiblesAudioIOS = () => {
	navigator.mediaDevices.enumerateDevices().then(function (dispositivos) {
		const dispositivosDeAudio = [];
		dispositivos.forEach(function (dispositivo) {
			const tipo = dispositivo.kind;
			if (tipo === "audioinput") {
				dispositivosDeAudio.push(dispositivo);
			}
		});

		if (dispositivosDeAudio.length > 0) {
			dispositivosDeAudio.forEach(dispositivo => {
				const option = document.createElement("option");
				option.value = dispositivo.deviceId;
				option.text = dispositivo.label;
				$listaDeDispositivosAudio.appendChild(option);
			});
		}
	});
};

function tieneSoporteUserMedia() {
	return !!(
		navigator.getUserMedia ||
		navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia ||
		navigator.webkitGetUserMedia ||
		navigator.msGetUserMedia
	);
}

function _getUserMediaAudio() {
	return (
		navigator.getUserMedia ||
		navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia ||
		navigator.webkitGetUserMedia ||
		navigator.msGetUserMedia
	).apply(navigator, arguments);
}

function _getUserMediaVideo() {
	return (
		navigator.getUserMedia ||
		navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia ||
		navigator.webkitGetUserMedia ||
		navigator.msGetUserMedia
	).apply(navigator, arguments);
}

guestVideoService.saveGeolocation(() => {
	console.log("Conectando denunciante...");
	var isSafari =
		navigator.vendor &&
		navigator.vendor.indexOf("Apple") > -1 &&
		navigator.userAgent &&
		navigator.userAgent.indexOf("CriOS") == -1 &&
		navigator.userAgent.indexOf("FxiOS") == -1;

	let platform = navigator.platform;

	if (!tieneSoporteUserMedia()) {
		alert("Tu navegador no soporta esta característica");
		$estado.innerHTML =
			"Tu navegador no soporta este funcionamiento. Sube una foto desde tu dispositivo.";
		return;
	}

	$(mediaDevicesModal).modal("show");

	let dispositivosDeVideo;
	let dispositivosDeAudio;

	if (!isSafari && platform != "iPhone") {
		navigator.mediaDevices.enumerateDevices().then(function (dispositivos) {
			dispositivosDeVideo = [];
			dispositivosDeAudio = [];

			dispositivos.forEach(function (dispositivo) {
				const tipo = dispositivo.kind;

				if (tipo === "videoinput") {
					dispositivosDeVideo.push(dispositivo);
				}

				if (tipo === "audioinput") {
					dispositivosDeAudio.push(dispositivo);
				}
			});

			if (dispositivosDeVideo.length > 0) {
				mostrarStreamVideo(dispositivosDeVideo.deviceId);
			}

			if (dispositivosDeAudio.length > 0) {
				mostrarStreamAudio(dispositivosDeAudio.deviceId);
			}
		});

		const mostrarStreamVideo = idDeDispositivo => {
			_getUserMediaVideo(
				{
					video: {
						deviceId: idDeDispositivo
					}
				},
				function (streamObtenidoVideo) {
					llenarSelectConDispositivosDisponiblesVideo(
						idDeDispositivo
					);

					$listaDeDispositivosVideo.onchange = () => {
						if (videoStream) {
							videoStream.getTracks().forEach(function (track) {
								track.stop();
							});
						}
						mostrarStreamVideo($listaDeDispositivosVideo.value);
					};

					videoStream = streamObtenidoVideo;
					guestVideoService.videoStream = idDeDispositivo;

					$video.srcObject = streamObtenidoVideo;
					$video.play();

					$("#media-devices-alert").attr("hidden", true);
					$("#media-devices-selectors").removeAttr("hidden");
					checkButtonAccept();
				},
				function (error) {
					let listDevices = document.getElementById(
						"listDevicesVideo"
					);
					$video.remove();
					$("#listDevicesVideo").empty();
					$("#videoDiv").remove();

					let spanElement = document.createElement("span");
					spanElement.textContent =
						"Permiso denegado, vuelve a recargar";
					spanElement.setAttribute("id", "listaDeDispositivosVideo");
					listDevices.appendChild(spanElement);
					console.log("Permiso denegado o error: ", error);

					$acceptConfiguration.setAttribute("disabled", true);
				}
			);
		};

		const mostrarStreamAudio = idDeDispositivo => {
			_getUserMediaAudio(
				{
					audio: {
						deviceId: idDeDispositivo
					}
				},
				function (streamObtenidoAudio) {
					llenarSelectConDispositivosDisponiblesAudio(
						idDeDispositivo
					);

					$listaDeDispositivosAudio.onchange = () => {
						if (audioStream) {
							audioStream.getTracks().forEach(function (track) {
								track.stop();
							});
						}
						mostrarStreamAudio($listaDeDispositivosAudio.value);
					};

					audioStream = streamObtenidoAudio;
					guestVideoService.audioStream = idDeDispositivo;

					$audio.srcObject = streamObtenidoAudio;
					$audio.play();

					$("#media-devices-alert").attr("hidden", true);
					$("#media-devices-selectors").removeAttr("hidden");
					checkButtonAccept();
				},
				function (error) {
					let listDevices = document.getElementById(
						"listDevicesAudio"
					);
					$audio.remove();
					$("#listDevicesAudio").empty();

					let spanElement = document.createElement("span");
					spanElement.textContent =
						"Permiso denegado, vuelve a recargar";
					spanElement.setAttribute("id", "listaDeDispositivosAudio");
					listDevices.appendChild(spanElement);

					console.log("Permiso denegado o error: ", error);
					$acceptConfiguration.setAttribute("disabled", true);
				}
			);
		};
	} else {
		const mostrarStreamVideo = (camera_selected = null) => {
			
			let options = {
				video: {
					deviceId: {
					  exact: camera_selected.deviceId ? camera_selected.deviceId : camera_selected,
					}
				},
				audio: true
			};

			navigator.mediaDevices.getUserMedia(options).then(function(streamObtenido) {
				// console.log('camara selected', streamObtenido);
				$listaDeDispositivosVideo.onchange = () => {
					// console.log('anterior',videoStream);
					videoStream.getTracks().forEach(function(track) {
						track.stop();
					});
					mostrarStreamVideo($listaDeDispositivosVideo.value);
				};

				videoStream = streamObtenido;
				guestVideoService.videoStream = camera_selected.deviceId ? camera_selected.deviceId : camera_selected;
				console.log('video w', videoStream);

				$video.srcObject = videoStream;
				$video.play();
				checkButtonAccept();
			});
		}; 

		const mostrarStreamAudio = (audio_selected = null) => {

			let options = {
				audio: {
					deviceId: {
					  exact: audio_selected.deviceId ? audio_selected.deviceId : audio_selected,
					}
				},
			};

			navigator.mediaDevices.getUserMedia(options).then(function(streamObtenido) {
				console.log('camara selected', streamObtenido);
				$listaDeDispositivosAudio.onchange = () => {
					// console.log('anterior',audioStream);
					audioStream.getTracks().forEach(function(track) {
						track.stop();
					});
					mostrarStreamAudio($listaDeDispositivosAudio.value);
				};

				audioStream = streamObtenido;
				guestVideoService.audioStream = audio_selected.deviceId ? audio_selected.deviceId : audio_selected;
				console.log('audio w', audioStream);
				$audio.srcObject = audioStream;
				$audio.play();
				checkButtonAccept();
			});

			$("#media-devices-alert").attr("hidden", true);
			$("#media-devices-selectors").removeAttr("hidden");
			//console.log('remove attee')
			//if (audioStream && videoStream) $($acceptConfiguration).removeAttr("disabled");
		};

		const mostrarStream = (idDeDispositivo = null) => {
			let options = {
				video: true,
				deviceId: idDeDispositivo,
				audio: true
			};
			idDeDispositivo = null ? delete options.deviceId : idDeDispositivo;
			
			navigator.mediaDevices.getUserMedia(options).then(function(streamObtenido) {
					navigator.mediaDevices.enumerateDevices().then(function(dispositivos) {
						dispositivosDeVideo = [];
						dispositivosDeAudio = [];
						dispositivos.forEach(function(dispositivo) {
							const tipo = dispositivo.kind;
							if (tipo === "videoinput") {
								dispositivosDeVideo.push(dispositivo);
							}
							if (tipo === "audioinput") {
								dispositivosDeAudio.push(dispositivo);
							}
						});
						
						if (dispositivosDeVideo.length > 0) {
							llenarSelectConDispositivosDisponiblesVideoIOS();
							mostrarStreamVideo(dispositivosDeVideo[0]);
						}

						if (dispositivosDeAudio.length > 0) {
							llenarSelectConDispositivosDisponiblesAudioIOS();
							mostrarStreamAudio(dispositivosDeAudio[0]);
						}
					});
				})
				.catch(function(err) {
					console.log("Permiso denegado o error: ", err);
					$estado.classList.remove("d-none");
				});
		};
		mostrarStream();
	}

	function checkButtonAccept() {
		if (audioStream && videoStream) {
			$($acceptConfiguration).removeAttr("disabled");
		}
	}

	// NO BORRAR
	// texto_inicial.style.display = "block";
	// if (navigator.mediaDevices) {
	// 	navigator.mediaDevices
	// 		.getUserMedia({ audio: true, video: true })
	// 		.then(function (stream) {
	// 			console.log("Acceso a cámara y audio concedido");

	// 			guestVideoService.connectGuest(
	// 				{ delito, folio: folio_SY + "/" + year_SF, descripcion },
	// 				guest => {
	// 					console.log("Denuciante conectado");
	// 					console.log(guest);
	// 				},
	// 				onerror => {
	// 					Swal.fire({
	// 						icon: "error",
	// 						title: "Hubo un error, se recargará la página.",
	// 						showConfirmButton: false,
	// 						timer: 1000,
	// 						timerProgressBar: true,
	// 					}).then(result => {
	// 						location.reload;
	// 					});
	// 				},
	// 				ondisconnect => {
	// 					// Swal.fire({
	// 					// 	icon: "error",
	// 					// 	title: "Hubo una desconexión, se recargará la página.",
	// 					// 	showConfirmButton: false,
	// 					// 	timer: 1000,
	// 					// 	timerProgressBar: true,
	// 					// }).then(result => {
	// 					// 	location.reload;
	// 					// });
	// 				},
	// 			);
	// 		})
	// 		.catch(function (error) {
	// 			console.log("Acceso a cámara y audio denegado");
	// 			texto_inicial.style.display = "none";
	// 			pantalla_error.style.display = "block";
	// 			video_container.style.display = "none";
	// 			document.querySelector("#documentos_anexar_card").style.display = "none";
	// 		});
	// } else {
	// 	console.log("El navegador no soporta MediaDevices");
	// 	texto_inicial.style.display = "none";
	// 	pantalla_error.style.display = "block";
	// 	video_container.style.display = "none";
	// 	document.querySelector("#documentos_anexar_card").style.display = "none";
	// 	Swal.fire({
	// 		position: "top-end",
	// 		title: "Tu navegador no soporte el microfono y la cámara, de favor utiliza otro navegador o dispositivo.",
	// 		showConfirmButton: false,
	// 		timer: 5000,
	// 		timerProgressBar: true,
	// 	});
	// }
	//END NO BORRAR
});

function deleteVideoElement() {
	const videos_array = document.querySelectorAll("video");

	videos_array.forEach(element => {
		element.remove();
	});
}
