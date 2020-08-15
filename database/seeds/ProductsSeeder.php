<?php

use Illuminate\Database\Seeder;
use \App\Enums\Category\CategoryTypes;
use \App\Entities\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'category_id' => CategoryTypes::REFFER,
                'name' => 'Monster Energy Ultra Zero Sugar',
                'description' => 'Algumas pessoas são impossíveis de agradar. Logo que elas conseguem o que querem já começam a querer algo mais. Nossos pilotos e Monster  Girls não são diferentes...mas eles deixaram algumas dicas pelo caminho. Eles pediram para nós um novo Monster. Um pouco menos doce, com gosto mais leve, zero calorias, mas completo com o nosso Monster blend de energia. Sem dúvidas, white is the new black. Totalmente fora da caixa: Monster Energy Zero Ultra.',
                'price' => 7.90,
                'image' => 'zero-ultra.png'
            ],
            [
                'category_id' => CategoryTypes::GOOD,
                'name' => 'Monster Energy Ultra Violet',
                'description' => 'Bem vindo aos anos 70! Época de atitude livre e positiva, com um estilo único e inconfundível: calças boca de sino com bandanas típicas e estampas tye-dye. Tempo onde o psicodélico, glamour, heavy metal e rock se misturaram em uma harmonia única. Pegou? Então vamos tomar um Monster Ultra Violet!Embarque conosco nessa viagem mágica de volta ao tempo!',
                'price' => 7.90,
                'image' => 'ultra-violet.png'
            ],
            [
                'category_id' => CategoryTypes::GOOD,
                'name' => 'Monster Energy',
                'description' => 'Surpreenda-se com a lata do energético mais animal do planeta, MONSTER ENERGY. Invadimos o laboratório e preparamos uma dose dupla de energia. É um mega golpe que entrega duas vezes o punch de uma bebida energética regular. MONSTER possui uma presença viciante e um sabor único que pode certamente ser degustado do início ao fim. Unleash The Beast',
                'price' => 7.90,
                'image' => 'energy.png'
            ],
            [
                'category_id' => CategoryTypes::GOOD,
                'name' => 'Monster Energy Lo-Carb',
                'description' => 'Surpreenda-se com uma lata do energético mais animal do planeta, Lo-Carb MONSTER ENERGY. Tomamos o laboratório e mudamos o nosso Monster. Extraímos carboidratos e calorias, transplantamos o punch mantendo um sabor indescritível. Lo-Carb MOSTRE ENERGY ainda entrega duas vezes o punch de uma bebida energética regular mas tem somente uma fração das calorias.',
                'price' => 7.90,
                'image' => 'lo-carb.png'
            ],
            [
                'category_id' => CategoryTypes::REFFER,
                'name' => 'Monster Energy Absolutely Zero',
                'description' => 'Faz tempo que a gente ouve o pessoal pedindo um Monster com zero açúcar. A gente entende, mas isso não é refrigerante, sacou?! Fazer uma bebida com menos calorias, sem açúcar e gostosa a ponto de levar a garra da Monster não é moleza. Após centenas de tentativas a gente conseguiu! Menos calorias, zero açúcar e atitude Monster!',
                'price' => 7.90,
                'image' => 'absolutely-zero.png'
            ],
            [
                'category_id' => CategoryTypes::BAD,
                'name' => 'Monster Khaos',
                'description' => 'Nossos atletas estão sempre no limite, por isso quando eles possuem alguma ideia nós paramos para ouvir. Após meses no laboratório, aperfeiçoamos o "Juice Monster". Começamos com o sabor original de Monster misturado em uma combinação agressiva de sucos naturais, em seguida carregamos essa combinação com uma carga de energia e... está criado, vivo! Monster Khaos, um insano Juice-Monster híbrido borbulhando com o grande gosto do Monster e o grande punch que você conhece e ama. Parte suco - 100% Monster!',
                'price' => 7.90,
                'image' => 'khaos.png'
            ],
            [
                'category_id' => CategoryTypes::REFFER,
                'name' => 'Monster Mango Loco',
                'description' => 'Todo ano, na noite de 31 de Outubro no México, amigos e famílias se reunem para celebrar o “Dia de Los Muertos”. Misticismo e memórias com muita comida e bebida seduzem a alma dos que já se foram para se juntarem á festa. Monster Mango Loco é o Mix de sucos perfeito para atrair as almas mais teimosas. Sabor irado junto do clássico punch de Monster faz com que a energia da festa dure por dias...',
                'price' => 7.90,
                'image' => 'mango-loco.png'
            ],
            [
                'category_id' => CategoryTypes::BAD,
                'name' => 'Monster Dragon Ice Tea',
                'description' => 'Reza a lenda que o Imperador Chinês Shennong acidentalmente fez a descoberta do chá quando um vento divino soprou algumas folhas dentro de sua chaleira. Surge o Dragão... 5000 anos depois combinamos o melhor chá preto com o verdadeiro suco de limão para cria o nosso Dragon Ice Tea, feito para o gosto de um Imperador ou Imperatriz, agora disponível para todos. Dragon Ice Tea é leve, refrescante e com baixa caloria. Feito com nosso combo energético insano que dá um toque moderno a nossa fórmula original. Nasce uma nova lenda! Unleash the Dragon!',
                'price' => 7.90,
                'image' => 'dragon-ice-tea.png'
            ],
        ];
        foreach ($products as $product){
            Product::create($product);
        }
    }
}
