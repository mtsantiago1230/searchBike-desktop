$cont_bici = 0;
$(document).ready(function (e) {
	addbici();
	$(document).on("click", ".agregar", function () {
		addbici();
	});
	$(document).on("click", ".eliminar", function () {
		$id = $(this).attr("data");
		eliminarbici($id);
	});
	$(".close").on("click", function () {
		$("#Exitoso").addClass("hidden");
		$("#registrado").addClass("hidden");
	});

	$("#contact-form").submit(function (e) {
		e.preventDefault();
		if ($("#basic_checkbox_2").prop("checked")) {
			var form = $("form#contact-form");
			var url = form.attr("action");
			console.log(form.serialize());
			//-- envio de datos
			$.post(
				url,
				form.serialize(),
				function (json) {
					if (json == "Registro Exitoso") {
						console.log(json);
						// $("#Exitoso").removeClass("hidden");
						swal("Registro Exitoso Ya Puedes Iniciar Sesión");
						//Redireccionamiento tras 5 segundos
						setTimeout(function () {
							window.location.href = "login";
						}, 3000);
					} else {
						swal("El usuario ya se Encuentra Registrado");
						//$("#registrado").removeClass("hidden");
					}
				},
				"json"
			);
		} else {
			swal("Debes aceptar las políticas de privacidad");
		}
	});

	$("#login").submit(function (e) {
		e.preventDefault();

		var form = $("form#login");
		var url = form.attr("action");

		console.log(form, url);

		//-- envio de datos
		$.post(
			url,
			form.serialize(),
			function (json) {
				console.log(json);
				if (json == "registrado") {
					window.location.href = "/SearchBike/usuario/";
				} else {
					swal("Datos incorrectos, si no tienes cuenta registrate");
				}
			},
			"json"
		);
	});
	$(document).on("click", "#imguser", function () {
		$("#imgu").click();
		$("#cambiar").removeClass("hidden");
	});
	$(document).on("click", "#id_Bicicleta_2", function () {
		$("#imgu2").click();
		$("#cambiar2").removeClass("hidden");
	});
	$(document).on("click", "#id_Bicicleta_1", function () {
		$("#imgu1").click();
		$("#cambiar1").removeClass("hidden");
	});
	$(document).on("click", "#id_Bicicleta_0", function () {
		$("#imgu0").click();
		$("#cambiar0").removeClass("hidden");
	});

	function filePreview(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.readAsDataURL(input.files[0]);
			reader.onload = function (e) {
				$("#us").remove();
				$("#foto").after(
					'<img src="' + e.target.result + '" width="450" height="300"/>'
				);
			};
		}
	}
	function filePreview1(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.readAsDataURL(input.files[0]);
			reader.onload = function (e) {
				$("#us1").remove();
				$("#foto1").after(
					'<img src="' + e.target.result + '" width="450" height="300"/>'
				);
			};
		}
	}
	function filePreview2(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.readAsDataURL(input.files[0]);
			reader.onload = function (e) {
				$("#us2").remove();
				$("#foto2").after(
					'<img src="' + e.target.result + '" width="450" height="300"/>'
				);
			};
		}
	}
	function filePreview3(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.readAsDataURL(input.files[0]);
			reader.onload = function (e) {
				$("#us3").remove();
				$("#foto3").after(
					'<img src="' + e.target.result + '" width="450" height="300"/>'
				);
			};
		}
	}
	$("#imgu").change(function () {
		filePreview(this);
	});
	$("#imgu0").change(function () {
		filePreview1(this);
	});
	$("#imgu1").change(function () {
		filePreview2(this);
	});
	$("#imgu2").change(function () {
		filePreview3(this);
	});

	$("#Consulta").submit(function (e) {
		e.preventDefault();

		var form = $("form#Consulta");
		var url = form.attr("action");

		//-- envio de datos
		$.post(
			url,
			form.serialize(),
			function (json) {
				if (json == "SinNovedad") {
					window.location.href = "/SearchBike/bienconsulta/sinNovedad";
				} else if (json == "Robada") {
					window.location.href = "/SearchBike/bienconsulta/Robada";
				} else if (json == "mconsulta") {
					window.location.href = "/SearchBike/mconsulta";
				}
			},
			"json"
		);
	});

	$(".recuperada").click(function (e) {
		e.preventDefault();
		$id_bici = $(this).attr("data_bici");
		$tipo = $(this).attr("tipo");
		console.log($tipo);
		$data_numero_serie = $(this).attr("data_numero_Serie");
		$("#reportes")
			.find("#id_Bicicleta_reporte")
			.val("" + $id_bici + "");
		$("#reportes")
			.find("#numero_Serie_reporte")
			.val("" + $data_numero_serie + "");
		$("#reportes")
			.find("#Hurto_o_Recuperada")
			.val("" + $tipo + "");
		$("#reportes")
			.find("#Hurto")
			.val("" + $tipo + "");
		$("#reportes")
			.find("#Serie_reporte")
			.val("" + $data_numero_serie + "");

		$(document).find("#Hurto_o_Recuperada");
	});
	$(".reporte").click(function (e) {
		$id_bici = $(this).attr("data_bici");
		$tipo = $(this).attr("tipo");
		console.log($tipo);
		$data_numero_serie = $(this).attr("data_numero_Serie");
		$("#reportes")
			.find("#id_Bicicleta_reporte")
			.val("" + $id_bici + "");
		$("#reportes")
			.find("#numero_Serie_reporte")
			.val("" + $data_numero_serie + "");
		$("#reportes")
			.find("#Hurto_o_Recuperada")
			.val("" + $tipo + "");
		$("#reportes")
			.find("#Hurto")
			.val("" + $tipo + "");
		$("#reportes")
			.find("#Serie_reporte")
			.val("" + $data_numero_serie + "");
		$(document).find("#Hurto_o_Recuperada");
	});

	$("#restaurar_clave").submit(function (e) {
		e.preventDefault();

		var form = $("form#restaurar_clave");
		var url = form.attr("action");

		//-- envio de datos
		$.post(
			url,
			form.serialize(),
			function (json) {
				if (json == "registrado") {
					$("#exampleModalCenter").modal("hide");
					swal(
						"Revisa t\u00fa Email te debe llagar un mensaje con tu usuario y contrase\u00f1a"
					);
				} else {
					$("#exampleModalCenter").modal("hide");
					swal("Datos incorrectos, si no tienes cuenta registrate");
				}
			},
			"json"
		);
	});
	$(document).on("click", ".Eliminar_bici", function () {
		var id_bici = $(this).attr("data_bici");

		console.log(id_bici);
		$url = "Eliminar_bici";
		swal({
			title: "¿Estas seguro de eliminar la bicicleta ?",
			text: "Esta accion no se puede devolver",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		}).then((willDelete) => {
			if (willDelete) {
				$.post(
					$url,
					id_bici,
					function (json) {
						if (json == "eliminada") {
							swal("Eliminada correctamente", {
								icon: "success",
							});
							location.reload();
						} else {
							swal("Accion cancelada");
						}
						location.reload();
					},
					"json"
				);
			} else {
				swal("Accion cancelada");
			}
		});
	});

	$(document).on("click", ".ceder", function () {
		var id_bici = $(this).attr("id_bici");

		console.log(id_bici);
		$url = "ceder";
		swal({
			title: "¿Estas seguro Ceder la propiedad de tu bicicleta ?",
			text: "Esta accion no se puede devolver",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		}).then((willDelete) => {
			if (willDelete) {
				$.post(
					$url,
					id_bici,
					function (json) {
						if (json == "ok") {
							swal("Bicicleta cedida con exito", {
								icon: "success",
							});
							location.reload();
						} else {
							swal("error al ceder la propiedad");
						}
						location.reload();
					},
					"json"
				);
			} else {
				swal("Accion cancelada");
			}
		});
	});

	$(document).on("click", ".reportar_user", function () {
		var id_bici = $(this).attr("id_bici");

		console.log(id_bici);
		$url = "reportar_user";
		swal({
			title: "¿Estas seguro de querer reportar al usuario?",
			text: "Esta acción no se puede devolver te llegara un correo con la información del usuario nombre y teléfono para que te puedas poner en contacto con él",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		}).then((willDelete) => {
			if (willDelete) {
				$.post(
					$url,
					id_bici,
					function (json) {
						if (json == "ok") {
							swal("Usuario Reportado Con exito", {
								icon: "success",
							});
							location.reload();
						} else {
							swal("error al Reportar al usuario");
						}
						location.reload();
					},
					"json"
				);
			} else {
				swal("Accion cancelada");
			}
		});
	});
});
function myFunction() {
	var x = document.getElementById("myInput");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}
function eliminarbici($id) {
	$cont_bici--;
	$(document)
		.find("#" + $id)
		.remove();
	if ($cont_bici == 1) {
		$(document).find(".eliminar").addClass("hidden");
	}
}
// funcion que adiciona bicicletas
function addbici() {
	//--  verificamos que no se puedan agregar mas bicicletas de las permitidas max(3)
	if ($cont_bici <= 2) {
		$bici = $("#bici");
		$contenedor_bicis = $(document).find("#contenedor_bici").clone();
		$contenedor_bicis.removeClass("hidden");
		/// TITULO DE BICICLETAS
		$contenedor_bicis.find("#numero_bici").empty().append("Bicicleta #");
		// Agregamos los names para cada bcicletas
		$contenedor_bicis.find(".bicicleta_").attr("id", "bicicleta_" + $cont_bici);
		$contenedor_bicis
			.find("#RegMarca")
			.attr("name", "bici[" + $cont_bici + "][RegMarca]");
		$contenedor_bicis
			.find("#RegReferencia")
			.attr("name", "bici[" + $cont_bici + "][RegReferencia]");
		$contenedor_bicis
			.find("#RegNumeroSerie")
			.attr("name", "bici[" + $cont_bici + "][RegNumeroSerie]");
		$contenedor_bicis
			.find("#RegColor")
			.attr("name", "bici[" + $cont_bici + "][RegColor]");
		$contenedor_bicis
			.find("#RegTipoB")
			.attr("name", "bici[" + $cont_bici + "][RegTipoB]");
		$contenedor_bicis
			.find("#RegEstado")
			.attr("name", "bici[" + $cont_bici + "][RegEstado]");
		$contenedor_bicis
			.find("#imgSerial")
			.attr("name", "bici[" + $cont_bici + "][imgSerial]");
		$contenedor_bicis.find(".eliminar").attr("data", "bicicleta_" + $cont_bici);

		$bici.append($contenedor_bicis);
		$cont_bici++;
		if ($cont_bici > 1) {
			$(document).find(".eliminar").removeClass("hidden");
		}

		console.log($cont_bici);
	} else {
		swal("No puedes Registrar mas Bicicletas");
	}
}
