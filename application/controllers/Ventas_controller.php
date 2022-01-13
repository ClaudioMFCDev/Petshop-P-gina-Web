<?php
/**
* Class Ventas_controller
*
* @package Controllers
*
* @author CCMF
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_controller extends CI_Controller {

	function __constructor()
	{

		parent:: __constructor();
	
		}

		public function guardar_venta(){

			$this->load->model('ventas_model');
			$this->load->model('balanceado_model');		

			$encabezado_venta = array(
					'id_cliente' => $this->session->userdata('id_usuario'),
					'fecha_venta' => date('Y-m-d'),
					);

			$this->ventas_model->guardar_venta($encabezado_venta);

			//luego obtenemos ultimo venta_id
			$id_venta = $this->db->insert_id();

			

			$cart = $this->cart->contents();

			foreach ($cart as $item) {

				$detalle_venta = array(
					'venta_id' => $id_venta,
					'id_producto' => $item['id'],
					'detalle_cantidad' => $item['qty'],
					'detalle_precio' => $item['price']
				);


			

			//Verificar stock para la compra

			$producto = $this->balanceado_model->select_balanceado_id_row($item['id']);

			$stock = $producto->stock;

				if ($stock >= $item['qty']) {

					$stock = $stock - $item['qty'];

					$data = array(
						'stock' => $stock
						 );

					$this->balanceado_model->actualizar_bal($data, $item['id']);
					$this->ventas_model->guardar_detalle_venta($detalle_venta);
				}

			}//fin foreach
			
			$this->cart->destroy();

			//Mensaje de agradecimiento	
			echo"<script>alert('Operacion exitosa, Muchas gracias!'); </script>";

			redirect('carrito');

		}//fin metodo


		public function guardar_la_venta(){

			$this->load->model('ventas_model');
			$this->load->model('balanceado_model');

			//CONTROL DE STOCK PARA LA COMPRA
			$producto = $this->balanceado_model->select_balanceado_id_row($item['id']);

			$stock = $producto->stock;


			if ($stock >= $item['qty']) {

					$stock = $stock - $item['qty'];

					$data = array(
						'stock' => $stock
						 );
					//FIN IF, $DATA = nuevoStock
				}else{//debo rechazar compra

					redirect('carrito');

				}

				//Registro encabezado de venta
			$encabezado_venta = array(
					'id_cliente' => $this->session->userdata('id_usuario'),
					'fecha_venta' => date('Y-m-d'),
					);

			$this->ventas_model->guardar_venta($encabezado_venta);

			//luego obtenemos ultimo venta_id
			$id_venta = $this->db->insert_id();

			

			$cart = $this->cart->contents();

			foreach ($cart as $item) {

				$detalle_venta = array(
					'venta_id' => $id_venta,
					'id_producto' => $item['id'],
					'detalle_cantidad' => $item['qty'],
					'detalle_precio' => $item['price']
				);
		
			}//fin foreach

			//ACTUALIZO STOCK Y GUARDO DETALLE DE VENTA
			$this->balanceado_model->actualizar_bal($data, $item['id']);
			$this->ventas_model->guardar_detalle_venta($detalle_venta);			
			
			$this->cart->destroy();

			//Mensaje de agradecimiento	
			echo "<script>alert('Operacion exitosa, Muchas gracias!'); </script>";

			redirect('carrito', 'refresh');

		}//fin metodo

}//fin class controller