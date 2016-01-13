<?php

class PostTableSeeder extends Seeder
{
	public function run(){
		$post1 = new Post();
			$post1->title = 'A Long Long Time Ago';
			$post1->subtitle = 'In a Galaxy Far Far Away';
			$post1->content = 'Lorem ipsum dolor sit amet, ut numquam repudiandae vim, vix no novum saperet appellantur. Periculis signiferumque ea pri, et dolore conceptam sit. Nominavi facilisi cu vix, eos ut probatus suavitate, solum utinam epicuri ex vis. Quis appareat quaestio et sit, ei pri illud eripuit lobortis, vis modus vivendo tacimates at. Quem moderatius pri in, ut brute noster dicunt his, graeci definitiones mei an';
			$post1->image = '/img/264H.jpg';
			$post1->save();
		$post2 = new Post();
			$post2->title = 'A Long Long Time Ago';
			$post2->subtitle = 'In a Galaxy Far Far Away';
			$post2->content = 'Lorem ipsum dolor sit amet, ut numquam repudiandae vim, vix no novum saperet appellantur. Periculis signiferumque ea pri, et dolore conceptam sit. Nominavi facilisi cu vix, eos ut probatus suavitate, solum utinam epicuri ex vis. Quis appareat quaestio et sit, ei pri illud eripuit lobortis, vis modus vivendo tacimates at. Quem moderatius pri in, ut brute noster dicunt his, graeci definitiones mei an';
			$post2->image = '/img/264H.jpg';
			$post2->save();
		$post3 = new Post();
			$post3->title = 'A Long Long Time Ago';
			$post3->subtitle = 'In a Galaxy Far Far Away';
			$post3->content = 'Lorem ipsum dolor sit amet, ut numquam repudiandae vim, vix no novum saperet appellantur. Periculis signiferumque ea pri, et dolore conceptam sit. Nominavi facilisi cu vix, eos ut probatus suavitate, solum utinam epicuri ex vis. Quis appareat quaestio et sit, ei pri illud eripuit lobortis, vis modus vivendo tacimates at. Quem moderatius pri in, ut brute noster dicunt his, graeci definitiones mei an';
			$post3->image = '/img/264H.jpg';
			$post3->save();
	}
}

?>