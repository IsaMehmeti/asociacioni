<?php

use Illuminate\Database\Seeder;
use App\Models\Municipality;

class MunicipalitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$cities = ['deçan', 'dragash', 'ferizaj', 'gjakovë', 'gjilan', 'drenas', 'istog', 'kaçanik', 'kamenicë', 'novobërdë', 'klinë', 'junik', 'lipjan', 'malishevë', 'mitrovicë', 'obiliq', 'pejë', 'podujevë', 'prishtinë', 'rahovec', 'prizren', 'shtërpce', 'skenderaj', 'partesh', 'ranillug', 'kllokot', 'graçanic','mitrovica e veriut'];
    	$sr = ['dečani', 'dragaš', 'uroševac', 'djakovica', 'gnjilane', 'drenas', 'istok', 'kačanik', 'kamenica', 'novo brdo', 'klina', 'junik', 'lipljane', 'mališevo', 'južna mitrovica', 'obilić', 'peć', 'podujevo', 'priština', 'orahovac', 'prizren', 'štrpce', 'srbica', 'parteš', 'ranilug', 'klokot', 'gračanica','severna mitrovica'];
        $i = 0;
    	foreach ($cities as $city) {
	        Municipality::create([
	            'en' => ['name'=> $city],
	            'sq' => ['name'=> $city],
	            'sr' => ['name'=> $sr[$i]]
	        ]);
    	   $i++;   
    	}

    }
}
