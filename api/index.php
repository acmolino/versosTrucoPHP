<?php
//Datos precargados a modo de ejemplo
$envido[0] = 'Cuando vine de La Isla traiba un lazo retorcido; con él enlacé dos cartas y con dos le digo Envido.';
$envido[1] = 'El otro día jugaba con el viejo Salvador. Vuelta a vuelta Envido y truco ¡Pucha, viejo ligador!';
$envido[2] = 'Vamos medio derrotados pero no le temo al cuco; pues cantan los colorados Falta envido y truco.';

$flor[0] = 'Por el río Paraná venía navegando un piojo, con un hachazo en el ojo y una Flor en el ojal.';
$flor[1] = 'Para pintar a mi china no hay pinceles ni pintor, ni flores en los jardines comparadas con mi Flor.';
$flor[2] = 'Cómo lágrimas de olvido como suspiros de amor, cantaba sus grandes penas un pájaro en una Flor.';

$truco[0] = 'Los gauchos del General peleaba con trabuco, yo peleo con tres cartas porque estoy jugando al Truco';
$truco[1] = 'Una carrera corrieron el sapo y la comadreja, y el sapo al aventajarla le dijo Truco en la oreja.';
$truco[2] = 'Con las cartas que yo tengo tampoco me asusta el cuco y si es que no me detengo le digo Quiero y retruco.';


$grito = $_GET['cboGrito'];

switch ($grito) {
	case 'flor':
		$devolver = rand(0, count($flor)-1);
		echo $flor[$devolver];
		break;

	case 'envido':
		$devolver = rand(0, count($envido)-1);
		echo $envido[0];
		break;

	case 'truco':
		$devolver = rand(0, count($truco)-1);
		echo $truco[0];
		break;
	
	default:
		echo "Sin canto ni grito";
		break;
}

