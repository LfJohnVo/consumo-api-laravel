<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Laracasts\Flash\Flash;


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
        $response = $client->request('GET', '/BANJERCITO/wsvins/tests/v1/'.$vin);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        //
        //var_dump($body);
        //dd($body[200], $statusCode);

        $archivo = $body;
        $uuid = $vin;
        $path = "xml_down/" . $uuid . ".xml";
        file_put_contents($path, $archivo);
        header("Content-disposition: attachment; filename=$uuid.xml");
        header("Content-type: application/xml");

        if ($statusCode == '200'){
            $bool = TRUE;
            Flash::success('<p class="green-text">Api consumida con éxito</p>');
        }else{
            Flash::success('<p class="red-text">Intente de nuevo</p>');
        }

        return view('consumo')
            ->with('cliente', $body);
    }
}
