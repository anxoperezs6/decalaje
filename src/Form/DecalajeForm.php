<?php

namespace Drupal\decalaje\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
/**
 * Our simple form class.
 */
class DecalajeForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'decalaje_ajax_form';
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    

	  $form['distancia'] = [
       '#type' => 'textfield',
        '#title' => $this->t('Introduzca la distancia de la carrera en metros'),
        '#description' => $this->t('Recuerde introducir la distancia en metros'),
        '#required' => TRUE,
      ];

    $form['calle'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Introduzca el número de la calle por la que va a correr'),
      '#description' => $this->t('Recuerde introducir un número entre el 1 y el 9'),
      '#required' => TRUE,
    ];

	$form['actions'] = [
      '#type' => 'button',
      '#value' => $this->t('CALCULAR'),
      '#ajax' => [
        'callback' => '::setMessage',
      ]
    ];

    $form['massage'] = [
      '#type' => 'markup',
      '#markup' => '<div class="result_message"></div>',
    ];

	$form['longitud_calle'] = [
      '#type' => 'markup',
      '#markup' => '<div class="longitud_calle"></div>',
    ];

  $form['origin_message_1'] = [
      '#type' => 'markup',
      '#markup' => '<br/><div class="origin_message_1"></div><br/>',
    ];  

    $form['origin_message_2'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_2"></div><br/>',
    ];

    $form['origin_message_3'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_3"></div><br/>',
    ];

	$form['origin_message_4'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_4"></div><br/>',
    ];

    $form['origin_message_for_1'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_1"></div><br/>',
    ];

	$form['origin_message_for_2'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_2"></div><br/>',
    ];

    $form['origin_message_for_3'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_3"></div><br/>',
    ];

    $form['origin_message_for_4'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_4"></div><br/>',
    ];

    $form['origin_message_for_5'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_5"></div><br/>',
    ];

    $form['origin_message_for_6'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_6"></div><br/>',
    ];

    $form['origin_message_for_7'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_7"></div><br/>',
    ];

    $form['origin_message_for_8'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_8"></div><br/>',
    ];

    $form['origin_message_for_9'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_9"></div><br/>',
    ];

    $form['origin_message_for_10'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_10"></div><br/>',
    ];

    $form['origin_message_for_11'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_11"></div><br/>',
    ];

    $form['origin_message_for_12'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_12"></div><br/>',
    ];

    $form['origin_message_for_13'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_13"></div><br/>',
    ];

    $form['origin_message_for_14'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_14"></div><br/>',
    ];

    $form['origin_message_for_15'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_15"></div><br/>',
    ];

    $form['origin_message_for_16'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_16"></div><br/>',
    ];

    $form['origin_message_for_17'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_17"></div><br/>',
    ];

    $form['origin_message_for_18'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_18"></div><br/>',
    ];

    $form['origin_message_for_19'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_19"></div><br/>',
    ];

    $form['origin_message_for_20'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_20"></div><br/>',
    ];

    $form['origin_message_for_21'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_21"></div><br/>',
    ];

    $form['origin_message_for_22'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_22"></div><br/>',
    ];

    $form['origin_message_for_23'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_23"></div><br/>',
    ];

    $form['origin_message_for_24'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_24"></div><br/>',
    ];

    $form['origin_message_for_25'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_25"></div><br/>',
    ];

    $form['origin_message_for_26'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_26"></div><br/>',
    ];

    $form['origin_message_for_27'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_27"></div><br/>',
    ];

    $form['origin_message_for_28'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_28"></div><br/>',
    ];

    $form['origin_message_for_29'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_29"></div><br/>',
    ];

    $form['origin_message_for_30'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_30"></div><br/>',
    ];

    $form['origin_message_for_31'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_31"></div><br/>',
    ];

    $form['origin_message_for_32'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_32"></div><br/>',
    ];

    $form['origin_message_for_33'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_33"></div><br/>',
    ];

    $form['origin_message_for_34'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_34"></div><br/>',
    ];

    $form['origin_message_for_35'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_35"></div><br/>',
    ];

    $form['origin_message_for_36'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_36"></div><br/>',
    ];

    $form['origin_message_for_37'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_37"></div><br/>',
    ];

    $form['origin_message_for_38'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_38"></div><br/>',
    ];

    $form['origin_message_for_39'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_39"></div><br/>',
    ];

    $form['origin_message_for_40'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_40"></div><br/>',
    ];

    $form['origin_message_for_41'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_41"></div><br/>',
    ];

    $form['origin_message_for_42'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_42"></div><br/>',
    ];

    $form['origin_message_for_43'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_43"></div><br/>',
    ];

    $form['origin_message_for_44'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_44"></div><br/>',
    ];

    $form['origin_message_for_45'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_45"></div><br/>',
    ];

    $form['origin_message_for_46'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_46"></div><br/>',
    ];

    $form['origin_message_for_47'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_47"></div><br/>',
    ];

    $form['origin_message_for_48'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_48"></div><br/>',
    ];

    $form['origin_message_for_49'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_49"></div><br/>',
    ];

    $form['origin_message_for_50'] = [
      '#type' => 'markup',
      '#markup' => '<div class="origin_message_for_50"></div><br/>',
    ];
    
    return $form;
  }


  public function setMessage(array &$form, FormStateInterface $form_state) {
    
  //Suponemos para esta primera versión que el ancho de la calle siempre es 1.22
  $ancho_calle = 1.22;
	
	//Recolecta el valor introducido en la interfaz web de la distancia a correr
	$carrera = $form_state->getValue('distancia');

	//Recolecta el valor introducido en la interfaz web de la calle por la que se realiza la carrera
	$calle = $form_state->getValue('calle');

	// Longitud total de calle 
	// Si Calle>1 then 2pi((calle-1)*1,22-0,1) + 400 else 400
	if ($calle > 1) {
    	$longitud_calle = round((2*3.1416*((($calle-1)*$ancho_calle)-0.1))+400,3);
	} else {
	    $longitud_calle = 400;
	}

	// Numero de vueltas completas
	// Quedarse con el entero de carrera/Longitud calle

	$vueltas_enteras = floor($carrera/$longitud_calle);

	//Desde salida a primer paso por meta
	//carrera-(Longitud total calle*numero de vueltas completas)

	$salida_a_meta = round($carrera-($longitud_calle*$vueltas_enteras),3);

	//Sentido
	$sentido=" no se mueve ";

	//Definimos distancias y nombres de referencia en arrays

	$distancias = array (
		0,
    	10,
    	10.5,
    	14.02,
    	19,
    	23.16,
    	27.5,
    	32.3,
    	36,
    	40,
    	41.44,
    	44.5,
    	50,
    	50.58,
    	53,
    	59.72,
    	60,
    	61.5,
    	68.86,
    	70,
    	75,
    	78,
    	78.5,
    	80,
    	87,
    	87.14,
    	90,
    	96.28,
    	100,
    	110,
    	120,
    	140,
    	145,
    	150,
    	170,
    	180,
    	190,
    	200,
    	210,
    	215,
    	220,
    	230,
    	240,
    	250,
    	260,
    	285,
    	290,
    	300,
    	310,
    	320,
    	355,
    	390,
    	400,
    	$longitud_calle,
	);



	$medidas = array (
		"Línea de meta",
    	"Comienzo zona 4x400",
    	"10ª valla del 100v",
    	"10ª valla del 110v",
    	"9ª valla del 100v",
    	"9ª valla del 110v",
    	"8ª valla del 100v",
    	"8ª valla del 110v",
    	"7ª valla del 100v",
    	"10ª valla del 400v",
    	"7ª valla del 110v",
    	"6ª valla del 100v",
    	"Final 3ª zona 4x60",
    	"6ª valla del 110v",
    	"5ª valla del 100v",
    	"5ª valla del 110v",
    	"Salida del 60",
    	"4ª valla del 100v",
    	"4ª valla del 110v",
    	"3ª valla del 100v | Final 3ª zona 4x80",
    	"9ª valla del 400v",
    	"3ª valla del 110v",
    	"2ª valla del 100v",
    	"Comienzo 3ª zona 4x60",
    	"1ª valla del 100v",
    	"2ª valla del 110v",
    	"Final 3ª zona 4x100 | Final 1ª zona 4x300",
    	"1ª valla del 110v",
    	"Salida 100m| Comienzo 3ª zona 4x80",
    	"8ª valla del 400v | Final 2ª zona 4x60 | Comienzo 1ª zona 4x300",
    	"Comienzo 3ª zona 4x100",
    	"Comienzo 2ª zona 4x60",
    	"7ª valla del 400v",
    	"Final 2ª zona 4 x 80",
    	"Final 1ª zona 4x60",
    	"6ª valla del 400v | Comienzo 2ª zona 4x80",
    	"Final 2ª zona 4x100 | Final 2ª zona 4x300",
    	"Comienzo 1ª zona 4x60 | Salida del 5000 | Salida del 3000 | Salida del 1000",
    	"Comienzo 2ª zona 4x300",
    	"5ª valla del 400v",
    	"Comienzo segunda zona 4x100",
    	"Final 1ª zona 4x80",
    	"Salida 4x60",
    	"4ª valla del 400v",
    	"Comienzo 1ª zona 4x80",
    	"3ª valla del 400v",
    	"Final 1ª zona 4x100 | Final 3ª zona 4x300",
    	"Salida 300 | Salida 1500",
    	"Comienzo 3ª zona 4x300",
    	"2ª valla del 400v | Salida del 4x80 | Comienzo 1ª zona 4x100",
    	"1ª valla del 400v",
    	"Final de Zona 4x400",
    	"Salida 400 | Salida 4x100",
    	"Meta",
	);

	$minimo = 500;
	$linia = 500;

	//Dentro de un bucle que comprueba el array
	for ($i = 0; $i < sizeof($distancias); $i++) {
    	// SI ($salida_a_meta - array(i,"Distancias")) > 0 Y ($salida_a_meta - array(i,"Distancias")) < minimo ENTONCES minimo = ($salida_a_meta - array(i,"Distancias")) linia = i 
    	if (($salida_a_meta - $distancias[$i]) >= 0 and  ($salida_a_meta - $distancias[$i]) <= $minimo) {
        	$minimo = $salida_a_meta - $distancias[$i];
        	$linia = $i;
    	}
    	// SI  (array(i,"Distancias") - $salida_a_meta) > 0 y (array(i,"Distancias") - $salida_a_meta) < minimo ENTONCES minimo = (array(i,"Distancias") - $salida_a_meta) linia = i 
    	elseif (($distancias[$i] - $salida_a_meta) >= 0 and  ($distancias[$i] - $salida_a_meta) <= $minimo) {
        	$minimo = $distancias[$i] - $salida_a_meta;
        	$linia = $i;
    	}
	}

	//Calculamos sentido
	if ($distancias[$linia]>$salida_a_meta) 
    	    {$sentido="avanzar";} 
	elseif ($salida_a_meta>$distancias[$linia]) 
    	    {$sentido="retrasar";}
        
	//Calculamos numero de pasos de kilómetros exactos
	$numero_pasos = ceil($carrera / 1000) -1;


	//Empiezan Ajax
    $response = new AjaxResponse();
$response->addCommand(
      new HtmlCommand(
        '.origin_message_1',
        '<div class="origin_message_1">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_2',
        '<div class="origin_message_2">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_3',
        '<div class="origin_message_3">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_4',
        '<div class="origin_message_4">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_1',
        '<div class="origin_message_for_1">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_2',
        '<div class="origin_message_for_2">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_3',
        '<div class="origin_message_for_3">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_4',
        '<div class="origin_message_for_4">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_5',
        '<div class="origin_message_for_5">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_6',
        '<div class="origin_message_for_6">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_7',
        '<div class="origin_message_for_7">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_8',
        '<div class="origin_message_for_8">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_9',
        '<div class="origin_message_for_9">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_10',
        '<div class="origin_message_for_10">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_11',
        '<div class="origin_message_for_11">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_12',
        '<div class="origin_message_for_12">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_13',
        '<div class="origin_message_for_13">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_14',
        '<div class="origin_message_for_14">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_15',
        '<div class="origin_message_for_15">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_16',
        '<div class="origin_message_for_16">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_17',
        '<div class="origin_message_for_17">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_18',
        '<div class="origin_message_for_18">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_19',
        '<div class="origin_message_for_19">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_20',
        '<div class="origin_message_for_20">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_21',
        '<div class="origin_message_for_21">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_22',
        '<div class="origin_message_for_22">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_23',
        '<div class="origin_message_for_23">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_24',
        '<div class="origin_message_for_24">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_25',
        '<div class="origin_message_for_25">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_26',
        '<div class="origin_message_for_26">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_27',
        '<div class="origin_message_for_27">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_28',
        '<div class="origin_message_for_28">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_29',
        '<div class="origin_message_for_29">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_30',
        '<div class="origin_message_for_30">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_31',
        '<div class="origin_message_for_31">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_32',
        '<div class="origin_message_for_32">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_33',
        '<div class="origin_message_for_33">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_34',
        '<div class="origin_message_for_34">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_35',
        '<div class="origin_message_for_35">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_36',
        '<div class="origin_message_for_36">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_37',
        '<div class="origin_message_for_37">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_38',
        '<div class="origin_message_for_38">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_39',
        '<div class="origin_message_for_39">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_40',
        '<div class="origin_message_for_40">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_41',
        '<div class="origin_message_for_41">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_42',
        '<div class="origin_message_for_42">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_43',
        '<div class="origin_message_for_43">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_44',
        '<div class="origin_message_for_44">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_45',
        '<div class="origin_message_for_45">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_46',
        '<div class="origin_message_for_46">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_47',
        '<div class="origin_message_for_47">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_48',
        '<div class="origin_message_for_48">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_49',
        '<div class="origin_message_for_49">'
        )
    );
    $response->addCommand(
      new HtmlCommand(
        '.origin_message_for_50',
        '<div class="origin_message_for_50">'
        )
    );
    

    $response->addCommand(
      new HtmlCommand(
        '.origin_message_1',
        '<div class="origin_message_1">' . $this->t('La salida de la carrera de @carrera metros corrida por la calle @calle está situada @salida_a_meta metros antes de  la meta. ' ,['@carrera' => $carrera, '@calle' => $calle, '@salida_a_meta' => $salida_a_meta] )
        )
    );

    $response->addCommand(
      new HtmlCommand(
        '.origin_message_2',
        '<div class="origin_message_2">' . $this->t('Una vez pasada la meta, habrá que dar @vueltas_enteras vueltas enteras, ya que al correr por la calle @calle, la longitud de una vuelta completa será de @longitud_calle metros. ' ,['@vueltas_enteras' => $vueltas_enteras, '@calle' => $calle, '@longitud_calle' => $longitud_calle] )
        )
    );

    $response->addCommand(
      new HtmlCommand(
        '.origin_message_3',
        '<div class="origin_message_3">' . $this->t('Para localizar la salida tomaremos como referencia la marca "@medidas" la cual tendremos que @sentido @minimo metros en el sentido de la carrera. ' ,['@medidas' => $medidas[$linia], '@sentido' => $sentido, '@minimo' => round($minimo,3)] )
        )
    );


	$response->addCommand(
      new HtmlCommand(
        '.origin_message_4',
        '<div class="origin_message_4">' . $this->t('En esta carrera de @carrera metros, tendremos que marcar @numero_pasos puntos kilométricos además de la salida ya indicada. ' ,['@carrera' => $carrera, '@numero_pasos' => $numero_pasos] )
        )
    );



	//Segunda Parte, cálculo de los púntos kilométricos
	for ($j = 0; $j < $numero_pasos; $j++) {

  	$p = $j+1;
	$punto_km = $numero_pasos - $j;
	$distancia_punto_km = $punto_km*1000;


	$vueltas_enteras_km = floor($distancia_punto_km/$longitud_calle);

	$salida_a_meta_km = round($distancia_punto_km-($longitud_calle*$vueltas_enteras_km),3);

	$minimo_km = 500;
	$linia_km = 500;
	$sentido_km = "no mover";

	//Dentro de un bucle que comprueba el array
	for ($k = 0; $k < sizeof($distancias); $k++) {
    	if (($salida_a_meta_km - $distancias[$k]) >= 0 and  ($salida_a_meta_km - $distancias[$k]) <= $minimo_km) {
        	$minimo_km = $salida_a_meta_km - $distancias[$k];
        	$linia_km = $k;
    	}
    elseif (($distancias[$k] - $salida_a_meta_km) >= 0 and  ($distancias[$k] - $salida_a_meta_km) <= $minimo_km) {
        $minimo_km = $distancias[$k] - $salida_a_meta_km;
        $linia_km = $k;
    	}
	}

	if ($distancias[$linia_km]>$salida_a_meta_km) 
    	    {$sentido_km="avanzar";} 
	elseif ($salida_a_meta_km>$distancias[$linia_km]) 
    	    {$sentido_km="retrasar";}


  #$response->addCommand(
  #   new HtmlCommand(
  #     '.origin_message_for_'.$p,
  #     '<div class="origin_message_for_' . $p . '">' . $this->t('Para marcar el punto kilométrico @j tomaremos como referencia la marca "@medidas". La cual habrá que @sentido_km @minimo_km metros en sentido de la carrera.' ,['@j' => $j+1, '@medidas' => $medidas[$linia_km], '@sentido_km' => $sentido_km, '@minimo_km' => round($minimo_km,3)] )
  #      )
  #  );

  $response->addCommand(
     new HtmlCommand(
       '.origin_message_for_'.$p,
       '<div class="origin_message_for_' . $p . '">' . $this->t('Para marcar el punto kilométrico @j tomaremos como referencia la marca "@medidas". La cual habrá que @sentido_km @minimo_km metros en sentido de la carrera.' ,['@j' => $punto_km, '@medidas' => $medidas[$linia_km], '@sentido_km' => $sentido_km, '@minimo_km' => round($minimo_km,3)] )
        )
    );


	}
    
    return $response;
  }

/**
   * Validate the title and the checkbox of the form.
   *
   * @param array $form
   *   The form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The form state.
   */
  
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    cleanValues();
  }

}