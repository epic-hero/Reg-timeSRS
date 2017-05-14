<?php
require_once '../vendor/autoload.php';

chdir(dirname(__DIR__));
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class RegTime extends CI_Controller {

    public function index()
    {

    }
    public function isAvailable()
    {
        if($basename = $this->input->post('basename')) {

            $client = new Client(['base_uri' => 'https://www.webnames.ru:81/']);

            $response = $client->request('POST', '/RegTimeSRS.pl', [
                'form_params' => [
                    'username' => 'test',
                    'password' => 'test',
                    'thisPage' => 'pispCheckDomain',
                    'domain_name' => $basename,
                    'interface_lang' => 'ru',
                ]
            ]);

            $rezult = $response->getBody();

        } else {
            $rezult = 'not';
        }

        $data = array(
            'title' => 'My Title',
            'rezult' => $rezult,
            'domain_name' => $basename,
        );
        $this->load->view('isAvailable', $data);

    }

    public function getInfo()
    {
        if($basename = $this->input->post('basename')) {
            $pispWhois = 'pispWhois';
            $rezult = $this->guzzleRequest($basename, $pispWhois);
        }
        else {
            $rezult = 'Enter the domain name';
        }

        $data = array(
            'title' => 'My Title',
            'rezult' => $rezult,
            'domain_name' => $basename,
        );
        $this->load->view('getInfo', $data);


    }

    public function registrationDomain()
    {
        if($basename = $this->input->post('domain_name')) {
            $pispWhois = 'pispRegistration';
            $postrequest = $this->input->post();
            $domain_name = $postrequest['domain_name'];
            $period = $postrequest['period'];
            $person = $postrequest['person'];
            $person_r = $postrequest['person_r'];
            $passport = $postrequest['passport'];
            $residence = $postrequest['residence'];
            $birth_date = $postrequest['birth_date'];
            $country = $postrequest['country'];
            $p_addr = $postrequest['p_addr'];
            $phone = $postrequest['phone'];
            $fax = $postrequest['fax'];
            $e_mail = $postrequest['e_mail'];
            $code = $postrequest['code'];
            $ns0 = $postrequest['ns0'];
            $ns1 = $postrequest['ns1'];

            $client = new Client(['base_uri' => 'https://www.webnames.ru:81/']);

            $response = $client->request('POST', '/RegTimeSRS.pl', [
                'form_params' => [
                    'username' => 'test',
                    'password' => 'test',
                    'thisPage' => $pispWhois,
                    'domain_name' => $domain_name,
                    'period' => $period,
                    'person' => $person,
                    'person_r' => $person_r,
                    'passport' => $passport,
                    'residence' => $residence,
                    'birth_date' => $birth_date,
                    'country' => $country,
                    'p_addr' => $p_addr,
                    'phone' => $phone,
                    'fax' => $fax,
                    'e_mail' => $e_mail,
                    'code' => $code,
                    'ns0' => $ns0,
                    'ns1' => $ns1,
                    'utf8' => 1,
                ]
            ]);
            $rezult =  $response->getBody();
        } else {
            $rezult = '';
        }

        $data = array(
            'title' => 'My Title',
            'rezult' => $rezult,
            'domain_name' => $basename,
        );
        $this->load->view('registrationDomain', $data);
    }

    public function guzzleRequest($basename, $pisp)
    {
        $client = new Client(['base_uri' => 'https://www.webnames.ru:81/']);

        $response = $client->request('POST', '/RegTimeSRS.pl', [
            'form_params' => [
                'username' => 'test',
                'password' => 'test',
                'thisPage' => $pisp,
                'domain_name' => $basename,
                'interface_lang' => 'ru',
            ]
        ]);
        return $response->getBody();
    }

}
