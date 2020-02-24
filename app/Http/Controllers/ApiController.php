<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Laracasts\Flash\Flash;
use SimpleXMLElement;


class ApiController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function consumo()
    {

        $input = request()->validate([
            "vin" => ['string', 'required']
        ]);

        if (empty($input)) {

            Flash::error('<span class="red-text">Elija una opción</span>');
            return redirect(route('welcome.index'));
        }

        $vin = $input['vin'];

        $client = new Client([
            'base_uri' => 'http://201.163.186.154:8080',
        ]);
        $response = $client->request('GET', '/BANJERCITO/wsvins/tests/v1/' . $vin);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $path = "xml_down/" . $vin . ".xml";
        $ruta = $vin . ".xml";
        file_put_contents($path, $body);

        if ($statusCode == '200') {

            Flash::success('<p class="green-text">Api consumida con éxito</p>');

            //Pasar String a array
            $decode = xml_decode($body);

            foreach ($decode as $item) {
                if ($item != NULL) {
                    $nodos[] = array($item);

                } else {
                    continue;
                }
            }

            $tamaño = (sizeof($nodos));

            return view('consumo', compact('nodos'))
                ->with('body', $body)
                ->with('ruta', $ruta)
                ->with('path', $path)
                ->with('count', $tamaño);
        } else {
            Flash::success('<p class="red-text">Intente de nuevo</p>');

            return view('consumo');
        }

    }//termina clase

    public function Descargar($ruta)
    {
        header("Content-disposition: attachment; filename=$ruta");
        header("Content-type: application/xml");
        readfile("xml_down/" . $ruta);
    }

}
