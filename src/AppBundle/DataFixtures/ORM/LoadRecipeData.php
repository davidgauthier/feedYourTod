<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Recipe;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;


class LoadRecipeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $recipes = array(
            array(
                'name'          => 'Purée de potimarron au persil',
                'recipeType'    => $this->getReference('recipeType-1'),
                'season'        => $this->getReference('season-0'),
                'content'       => "Pour 2 portions de 85g.
                                    Eplucher, épépinez puis coupez le potimarron en petits morceaux. Faites-le cuire dans une casserole d'eau bouillante pendant 15 minutes.
                                    Préparez un biberon chaud reconstitué avec les 7 mesurettes de lait Milumel 2ème age et les 210ml d’eau. Versez le mélange lacté sur le potimarron cuit, ajoutez le persil et le parmesan et mixez pour obtenir une purée fine.
                                    Servez chaud à votre enfant.",
                'preptime'      => '10 min',
                'cooktime'      => '15 min',
                'age'           => 12,
                'ingredients'   => [
                                    $this->getReference('food-0'),
                                    $this->getReference('food-1'),
                                    $this->getReference('food-2'),
                                ],
                'filling'       => 'rice, french fries',
                'observation'   => 'N\'hésitez pas à varier les légumes : potimarron, potiron...'
            ),
            array(
                'name'          => 'Velours de pommes vanille et fleur d\'oranger ',
                'recipeType'    => $this->getReference('recipeType-1'),
                'season'        => $this->getReference('season-1'),
                'content'       => "Pour 2 portions de 90g.
                                    Epluchez et épépinez les pommes. Coupez-les en petits morceaux et faites-les cuire dans une casserole avec100ml d’eau, la vanille en poudre et l’eau de fleur d’oranger, pendant 10 minutes.
                                    Préparez un biberon chaud reconstitué avec les mesurettes de lait Milumel 2ème âge et 210ml d'eau. Ajoutez le mélange lacté aux pommes cuites et mixez.
                                    Laissez refroidir avant de servir à votre enfant.",
                'preptime'      => '10 min',
                'cooktime'      => '10 min',
                'age'           => 6,
                'ingredients'   => [
                                    $this->getReference('food-3'),
                                    $this->getReference('food-4'),
                                    $this->getReference('food-5'),
                                    $this->getReference('food-1'),
                                ],
                'filling'       => '',
                'observation'   => 'Pour varier les plaisirs, vous pouvez remplacer la fleur d’oranger par quelques gouttes de sirop d’orgeat.'
            ),
            array(
                'name'          => 'Ecrasé de bananes à la poudre de cacao',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Pour 2 portions de 85g.
                                    Epluchez et écrasez les bananes.
                                    Préparez un biberon chaud reconstitué avec les 7 mesurettes de lait Milumel 2ème âge et les 210 ml d'eau.
                                    Versez le mélange lacté dans une casserole sur les bananes et faites cuire à feu doux pendant 3 minutes. Ajoutez le cacao en poudre et mélangez bien.
                                    Faites déguster à bébé, tiède ou froid.",
                'preptime'      => '5 min',
                'cooktime'      => '3 min',
                'age'           => 6,
                'ingredients'   => [
                    $this->getReference('food-7'),
                    $this->getReference('food-1'),
                    $this->getReference('food-8'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez décliner cette recette avec d’autres fruits selon la saison : pommes, poires, prunes...'
            ),
            array(
                'name'          => 'Porridge céréales Poire et Vanille',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Diluez le Milumel 2ème âge dans l'eau.
                                    Déposez les pétales de blé dans un bol, puis parsemez de la vanille en poudre.
                                    Recouvrez du Milumel 2ème âge et laissez gonfler 4-5 minutes.
                                    Pendant ce temps, épluchez la ½ poire et coupez-les en petits dés.
                                    Lorsque le porridge est prêt, ajoutez les dés de poires et mélangez.
                                    Servez de suite à votre enfant.",
                'preptime'      => '5 min',
                'cooktime'      => '',
                'age'           => 6,
                'ingredients'   => [
                    $this->getReference('food-9'),
                    $this->getReference('food-10'),
                    $this->getReference('food-4'),
                ],
                'filling'       => '',
                'observation'   => 'Pour varier les saveurs, vous pouvez essayer d’incorporer de la cannelle ou du gingembre en poudre dans le porridge.'
            ),
            array(
                'name'          => 'Purée de lentilles corail et tomates',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Diluez le Milumel 2ème âge dans l'eau. Réservez.
                                    Ebouillantez et épluchez la tomate, puis coupez-la en morceaux.
                                    Versez les lentilles dans une casserole, ajoutez les morceaux de tomates.
                                    Recouvrez du Milumel 2ème âge dilué et laissez cuire à couvert et sur feu doux pendant 20 minutes.
                                    Les lentilles sont cuites lorsqu'elles sont très moelleuses, presqu'écrasées.
                                    Servez alors chaud ou attendez pour servir froid.",
                'preptime'      => '5 min',
                'cooktime'      => '',
                'age'           => 6,
                'ingredients'   => [
                    $this->getReference('food-12'),
                    $this->getReference('food-11'),
                    $this->getReference('food-4'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez incorporer une pointe de curcuma pour habituer votre enfant aux saveurs des épices.'
            ),
            array(
                'name'          => 'Porridge anglais aux framboises',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Reconstituez le lait Milumel 2ème Age avec l’eau.
                                    Versez-le dans une casserole avec les flocons d'avoine.
                                    Faites chauffer sur feu moyen et laissez mijoter 5-6 minutes en remuant de temps en temps. Vous obtiendrez un mélange très moelleux et onctueux.
                                    Juste avant que le porridge d'avoine soit prêt, ajoutez les framboises écrasées et mélangez de nouveau.
                                    Ajoutez un peu d'eau au dernier moment si vous souhaitez une consistance plus fluide.
                                    Servez tiède à bébé ce porridge anglais aux framboises.",
                'preptime'      => '3 min',
                'cooktime'      => '6 min',
                'age'           => 6,
                'ingredients'   => [
                    $this->getReference('food-13'),
                    $this->getReference('food-1'),
                    $this->getReference('food-14'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez agrémenter votre porridge à l\'anglaise avec un peu de cannelle en poudre.'
            ),
            array(
                'name'          => 'Gâteau chocolat banane bébé',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Epluchez la banane et écrasez-la en purée à l'aide d'une fourchette.
                                    Dans poêle, faites chauffer cette purée de banane avec le sucre et le beurre. Bien mélanger. Réservez au chaud.
                                    Faites fondre au bain-marie le chocolat noir avec le reste de beurre.
                                    Versez ensuite cette préparation dans un récipient avec le reste de sucre, le Lactel Eveil Croissance Nature, la farine et la levure. Mélangez le tout jusqu'à que cela soit homogène.
                                    Disposez la purée de banane dans le fond de petits moules, puis la préparation à base de chocolat par dessus. 
                                    Enfournez ces gâteaux chocolat banane pour bébé, 30 min à 180°C.
                                    Laissez-les refroidir avant de les faire déguster à bébé !",
                'preptime'      => '25 min',
                'cooktime'      => '35 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-7'),
                    $this->getReference('food-20'),
                    $this->getReference('food-21'),
                    $this->getReference('food-22'),
                    $this->getReference('food-1'),
                    $this->getReference('food-24'),
                    $this->getReference('food-25')
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez remplacer la banane par d\'autres fruits comme la poire et les fruits.'
            ),
            array(
                'name'          => 'Semoule au lait vanille fraise',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Faites chauffer le Lactel Eveil Croissance Nature sans le faire bouillir.
                                    Ajoutez ensuite l’extrait de vanille et la semoule fine. 
                                    Remuez sans cesse ce mélange, jusqu'à ce que la semoule gonfle. Au bout de 3-4 minutes, retirez du feu et laissez complètement refroidir.
                                    Pendant ce temps, rincez les fraises, équeutez-les et coupez-les en tout petits dés.
                                    Versez la préparation de la semoule au lait vanille, dans des petits bols et surmontez-les des dés de fraises.
                                    Faites déguster à votre enfant ces onctueuses semoule au lait vanille fraise.",
                'preptime'      => '5 min',
                'cooktime'      => '4 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-1'),
                    $this->getReference('food-4'),
                    $this->getReference('food-26'),
                    $this->getReference('food-27'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez introduire progressivement d\'autres épices, comme la cannelle, dont la saveur est très douce.'
            ),
            array(
                'name'          => 'Yaourts aux éclats de chocolat',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Mélangez le Lactel Eveil Croissance Nature avec le sachet de ferment au yaourt (ou le ½ yaourt au lait entier).
                                    Versez cette préparation dans des petits pots en verre.
                                    Déposez-les ensuite dans la yaourtière et démarrez-la. Laissez étuver pendant 8 à 10 heures.
                                    Au moment de servir frais ces yaourts pour bébé, râpez du chocolat au lait sur le dessus.
                                    Vous n’avez plus qu’à faire déguster à bébé !",
                'preptime'      => '5 min',
                'cooktime'      => '480 min',
                'age'           => 10,
                'ingredients'   => [
                    $this->getReference('food-29'),
                    $this->getReference('food-28'),
                    $this->getReference('food-23'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez parfumer vos yaourts pour bébé, avec de la vanille, du cacao en poudre ou même de la purée de fruits.'
            ),
            array(
                'name'          => 'Petits flans pomme, banane et vanille',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Préchauffez le four à 180°C (th.6).
                                    Epluchez et coupez la pomme et la banane en petits dés.
                                    Dans un saladier, fouettez l'oeuf, le sucre vanillé (facultatif) et le Lactel Eveil Croissance Nature.
                                    Ajoutez-y ensuite les fruits coupés.
                                    Beurrez légèrement 3 petits moules et répartissez la préparation des flans dedans. 
                                    Déposez ces moules dans un plat à four, rempli à moitié d'eau, et enfournez pour 20 minutes.
                                    Lorsque les flans aux pommes et bananes sont bien dorés, sortez-les du four et laissez-les tiédir ou refroidir complètement.
                                    Vous n’avez plus qu’à faire déguster à bébé !",
                'preptime'      => '10 min',
                'cooktime'      => '20 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-30'),
                    $this->getReference('food-3'),
                    $this->getReference('food-7'),
                    $this->getReference('food-20'),
                    $this->getReference('food-29'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez changer les fruits en fonction de la saison : mangue, pêche, framboises... '
            ),
            array(
                'name'          => 'Velouté de carotte et pomme',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Épluchez et coupez la carotte et la pomme en fines lamelles.
                                    Plongez ensuite les légumes dans le Lactel Eveil Croissance Nature, couvrir et faites frémir sans porter à ébullition, pendant 10 minutes.
                                    Un fois cuit, mixez le tout.
                                    Ajoutez ensuite la noisette de crème fraîche et la ciboulette à la purée de légumes. Mixez de nouveau.
                                    Servez de suite à votre enfant ce délicieux velouté de carotte et pomme. ",
                'preptime'      => '5 min',
                'cooktime'      => '10 min',
                'age'           => 10,
                'ingredients'   => [
                    $this->getReference('food-3'),
                    $this->getReference('food-33'),
                    $this->getReference('food-29'),
                    $this->getReference('food-35'),
                    $this->getReference('food-34'),
                ],
                'filling'       => '',
                'observation'   => 'Osez incorporer un peu d\'épices douces dans la soupe : cumin, paprika et même vanille !'
            ),
            array(
                'name'          => 'Papillon aux 3 purées',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Epluchez et coupez la carotte et la pomme de terre en morceaux.
                                    Plongez-les ensuite dans une casserole d'eau bouillante légèrement salée. Ajoutez-y les petits pois et faites cuire pendant 15 minutes jusqu'à ce que la pointe d'un couteau s'enfonce facilement dans les légumes.
                                    Egouttez et répartissez chaque légume dans une assiette creuse différente. Ecrasez-les ensuite à la fourchette pour obtenir une purée.
                                    Faites chauffer le Lactel Eveil Croissance Nature sans le faire bouillir.
                                    Répartissez-le dans chaque purée et mélangez afin d’obtenir une texture assez épaisse.
                                    Avant de servir, réalisez les contours d’un papillon dans une assiette avec un filet de purée.
                                    Déposez tout d’abord, 2 cuillères à soupe de purée de petits pois pour faire les ailes du papillon. Entre les 2 ailes, déposez une cuillère de purée de carotte que vous allongez pour former le corps et la tête. Faites ensuite 2 traits de purée de petits pois de chaque côté de la tête. 
                                    Avec la purée de pomme de terre, réalisez des ronds sur les ailes. Superposez encore des ronds plus petits avec la purée de carotte.
                                    Enfin, faites 2 tous petits ronds de purée de pomme de terre sur la tête pour les yeux du papillon. Ajoutez une pointe de purée de carotte pour les pupilles.
                                    Servez de suite à votre enfant ce papillon aux trois purées.",
                'preptime'      => '20 min',
                'cooktime'      => '15 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-33'),
                    $this->getReference('food-36'),
                    $this->getReference('food-37'),
                    $this->getReference('food-29'),
                ],
                'filling'       => '',
                'observation'   => 'Si vous n\'avez pas utilisé toute la purée, conservez-la au congélateur pour un autre repas'
            ),
            array(
                'name'          => 'Semoule au lait poire-chocolat',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Epluchez et coupez la demie poire en petits dés. 
                                    Transvasez le contenu de la bouteille de Milumel Mes 1ers Laits & Céréales Cacao dans une casserole.
                                    Ajoutez-y les dés de poires préalablement écrasés. Faites chauffer l'ensemble sans faire bouillir.
                                    Lorsque le Milumel Mes 1èrs Laits & Céréales Cacao est chaud, versez la semoule de blé fine en pluie et laissez gonfler sur feu doux sans cesser de remuer à la cuillère en bois.
                                    Laissez tiédir légèrement puis versez la semoule au lait poire-chocolat dans des pots.
                                    Faites déguster à bébé !",
                'preptime'      => '5 min',
                'cooktime'      => '10 min',
                'age'           => 9,
                'ingredients'   => [
                    $this->getReference('food-9'),
                    $this->getReference('food-1'),
                    $this->getReference('food-38'),
                    $this->getReference('food-26'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez utiliser des pommes râpées ou de la banane écrasée à la place des dés de poires.'
            ),
            array(
                'name'          => 'Purée banane cacao pour bébé',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Epluchez et coupez la banane en rondelles. 
                                    Ecrasez-les à la fourchette. 
                                    Préparez un biberon en chauffant le lait Milumel 2ème âge et l'eau. Si vous le souhaitez, vous pouvez choisir de faire chauffer l'eau ou non,  pour servir ce dessert pour bébé chaud ou froid.
                                    Délayez le Milumel Mes 1ères Céréales Cacao avec le mélange précédent.
                                    Incorporez le tout, à la purée de banane et mélangez bien pour obtenir une texture oncteuse. 
                                    Servez de suite à bébé !",
                'preptime'      => '5 min',
                'cooktime'      => '',
                'age'           => 6,
                'ingredients'   => [
                    $this->getReference('food-7'),
                    $this->getReference('food-1'),
                    $this->getReference('food-38'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez accompagner cette purée banane cacao pour bébé, avec un petit biscuit emietté.'
            ),
            array(
                'name'          => 'Soupe d\'hiver pour bébé',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Détachez les fleurettes du chou-fleur et coupez-les en morceaux. 
                                    Epluchez le céleri-rave et coupez-le également en morceaux. Faites bouillir une casserole d'eau, puis plongez les légumes dedans. Laissez cuire pendant 10 minutes. La pointe du couteau doit s'y enfoncer facilement. Egouttez.
                                    Préparez un biberon en chauffant le lait Milumel 2ème âge et l'eau. 
                                    Délayez Milumel Mes 1ères Céréales Multi-Céréales avec le mélange précédent. 
                                    Versez ensuite le tout, sur la purée celéri-chou-fleur et mixez.
                                    Servez chaud cette soupe d'hiver pour bébé !",
                'preptime'      => '10 min',
                'cooktime'      => '10 min',
                'age'           => 6,
                'ingredients'   => [
                    $this->getReference('food-40'),
                    $this->getReference('food-39'),
                    $this->getReference('food-1'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez réaliser cette soupe pour bébé avec d\'autres légumes de saison pour obtenir d\'autres couleurs : orange (carotte-potiron), rouge (chou-betterave), ou verte (petits pois-courgette)'
            ),
            array(
                'name'          => 'Velouté de potimarron pour bébé',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Rincez et coupez grossièrement le potimarron en morceaux.
                                    Faites bouillir une casserole d'eau. Plongez-les dedans et laissez cuire pendant 10 minutes. La pointe du couteau doit s'y enfoncer facilement. Egouttez le potimarron et mixer.
                                    Préparez un biberon en chauffant le lait Milumel 2ème âge et l'eau.
                                    Délayez le Milumel Mes 1ères Céréales Nature avec le mélange précédent.
                                    Versez le tout sur la purée de potimarron, et mélangez pour obtenir un velouté pour bébé bien lisse.
                                    Servez chaud.",
                'preptime'      => '5 min',
                'cooktime'      => '10 min',
                'age'           => 6,
                'ingredients'   => [
                    $this->getReference('food-0'),
                    $this->getReference('food-1'),
                    $this->getReference('food-42'),
                ],
                'filling'       => '',
                'observation'   => 'Si vous souhaitez une consistance plus fluide, vous pouvez ajouter un peu plus d\'eau.'
            ),
            array(
                'name'          => 'Crêpes à la framboise',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Versez la farine, le sucre dans un saladier. Faites une fontaine et incorporez au fur et à mesure les œufs, le lait Lactel Eveil Croissance Nature et l'huile de colza en fouettant énergiquement.
                                    Si la pâte est trop épaisse, ajoutez un peu de lait Lactel Eveil Croissance Nature jusqu'à ce qu'elle soit lisse et fluide.
                                    Ecrasez les framboises à la fourchette afin d’obtenir une purée.
                                    Faites chauffer votre poêle à crêpes sur feu vif. Beurrez-la légèrement et versez une louche de pâte dedans de sorte à former des petites crêpes de même diamètre qu'un pancake. Tournez la poêle pour bien répartir la pâte. Retournez au bout de 2 minutes et cuisez encore 1-2 minutes. Faites de même jusqu'à épuisement de la pâte, en beurrant votre poêle à chaque fois.
                                    Garnissez les crêpes de purée de framboise, lorsque l’enfant est capable de consommer la crêpe ainsi.
                                    Servez à bébé ces petites crêpes à la framboise dans la journée car elles en se conservent pas.",
                'preptime'      => '10 min',
                'cooktime'      => '24 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-14'),
                    $this->getReference('food-24'),
                    $this->getReference('food-20'),
                    $this->getReference('food-30'),
                    $this->getReference('food-29')
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez remplacer le sucre par du sucre vanillé.'
            ),
            array(
                'name'          => 'Milkshake tiède à la mangue',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Epluchez la mangue, retirez le noyau et coupez-la en gros dés.
                                    Placez ensuite les morceaux de fruit dans une casserole avec 30cl de Lactel Eveil croissance au lait entier.
                                    Faites chauffer à feu doux pendant 3-4 minutes sans faire bouillir le mélange. Mixez au mixer-plongeant puis versez le contenu dans 4 verres hauts qui sera la base de vos milkshakes tièdes.
                                    Faites chauffer le reste du Lactel Eveil Croissance au lait entier sans le faire bouillir. Mixer jusqu'à obtenir un effet mousseux. Répartissez cette mousse sur le dessus de vos milkshakes.
                                    Dégustez de suite vos milkshakes tièdes à la mangue fraîche. ",
                'preptime'      => '5 min',
                'cooktime'      => '4 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-32'),
                    $this->getReference('food-29'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez parfumer avec d\'autres épices : cannelle, gingembre... et également servir ce milkshake tiède avec quelques dés de mangue.'
            ),
            array(
                'name'          => 'Poires façon Belle-Hélène',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Epluchez les poires. Mixez-les pour obtenir un velouté bien lisse. Réservez.
                                    Versez le Milumel Mes 1ers Laits Céréales Cacao dans une casserole. Ajoutez le chocolat à pâtisser coupé en morceaux. Faites fondre sur feu doux pendant 5 minutes. Mélangez à la cuillère en bois pour obtenir une ganache bien lisse.
                                    Juste avant de servir, remplissez une verrine de la purée de poires. Versez dessus la sauce chocolat tiède.",
                'preptime'      => '10 min',
                'cooktime'      => '10 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-2'),
                    $this->getReference('food-1'),
                    $this->getReference('food-38'),
                    $this->getReference('food-23'),
                ],
                'filling'       => '',
                'observation'   => 'Astuce : vous pouvez ajouter un peu de cannelle dans les poires avant de les mixer.'
            ),
            array(
                'name'          => 'Petits flans cacao céréales',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Faites bouillir le contenu de la bouteille Milumel Mes 1ers Laits et Céréales Cacao dans une casserole.
                                    Fouettez les œufs avec le sucre dans un saladier.
                                    Versez le contenu Milumel Mes 1ers Laits et Céréales Cacao bouillant sur ce mélange, tout en continuant de fouetter.
                                    Répartissez dans 2 petits moules. Laissez refroidir jusqu'à ce que les flans soient pris.",
                'preptime'      => '10 min',
                'cooktime'      => '10 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-1'),
                    $this->getReference('food-30'),
                    $this->getReference('food-38'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez servir avec un petit biscuit.'
            ),
            array(
                'name'          => 'Velouté de poires à la vanille',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Epluchez les poires. Coupez-les en dés et faites-les revenir dans une casserole avec le beurre. Puis ajoutez un fond d'eau et cuisez à couvert pendant 10 minutes. 
                                    Ajoutez la 1/2 bouteille de Milumel Mes 1ers Laits et Céréales Vanille et mixez pour obtenir un velouté bien lisse.
                                    Faites déguster à bébé chaud, tiède ou froid.",
                'preptime'      => '10 min',
                'cooktime'      => '10 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-9'),
                    $this->getReference('food-21'),
                    $this->getReference('food-1'),
                    $this->getReference('food-43'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez réaliser ce velouté avec d\'autres fruits de saison : pommes, bananes... ou associez plusieurs d\'entres eux.'
            ),
            array(
                'name'          => 'Purée de potimarron au curcuma',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Coupez le potimarron en morceaux en conservant la peau, puis les passer rapidement sous l'eau pour les rincer.
                                    Plongez-les dans une grande casserole d'eau bouillante salée et laissez cuire pendant 15 minutes, jusqu'à ce que la pointe d'un couteau s'enfonce facilement dans la chair du potimarron. 
                                    Passé ce temps, égouttez et écrasez en purée à l'aide d'un presse-purée manuel ou d'une fourchette.
                                    Ajoutez le Lactel Eveil et parfumez avec le curcuma en mélangeant bien.
                                    Dégustez bien chaud.",
                'preptime'      => '10 min',
                'cooktime'      => '15 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-0'),
                    $this->getReference('food-29'),
                ],
                'filling'       => '',
                'observation'   => 'Variez les épices avec du curry, du cumin ou même un peu de gingembre.'
            ),
            array(
                'name'          => 'Crème vanille sur lit de banane fondante',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Epluchez la banane. Ecrasez-la en purée fine à la fourchette. 
                                    Préparez un biberon avec 90 ml d’eau et 3 mesurettes de lait Milumel 2ème âge.
                                    Ajouter Mes 1ères céréales Milumel Vanille Naturelle.
                                    Déposez une couche de purée de banane au fond d'un petit bol.
                                    Surmontez de la crème de lait à la vanille.
                                    Servez tiède ou froid.",
                'preptime'      => '3 min',
                'cooktime'      => '2 min',
                'age'           => 8,
                'ingredients'   => [
                    $this->getReference('food-7'),
                    $this->getReference('food-1'),
                    $this->getReference('food-43'),
                ],
                'filling'       => '',
                'observation'   => 'Vous pouvez également ajouter une pincée de cannelle en poudre.'
            ),
            array(
                'name'          => 'Crème multi-céréales à la fraise',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Rincez et équeutez les fraises. Mixez-les finement.
                                    Préparez un biberon avec 150 ml d’eau et 5 mesurettes de lait Milumel 2ème âge. Ne chauffez pas trop l’eau (40°C max).
                                    Mélangez avec le Milumel Mes 1ères céréales Multi-céréales.
                                    Incorporez le coulis de fraise pour obtenir un mélange lisse.
                                    Servez tiède ou froid.",
                'preptime'      => '3 min',
                'cooktime'      => '2 min',
                'age'           => 8,
                'ingredients'   => [
                    $this->getReference('food-14'),
                    $this->getReference('food-1'),
                    $this->getReference('food-41'),
                ],
                'filling'       => '',
                'observation'   => 'Cette recette s\'adapte aussi très bien avec des framboises.'
            ),
            array(
                'name'          => 'Velouté de légumes du potager',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Préparez un biberon avec 180 ml d’eau chaude et 6 mesurettes de lait Milumel 2ème âge.
                                    Délayez Milumel Mes 1ères Céréales Légumes du Potager dans le lait reconstitué.
                                    Ciselez très fin la ciboulette. Incorporez dans le velouté. Mélangez de nouveau.
                                    Servez à température ambiante. ",
                'preptime'      => '3 min',
                'cooktime'      => '',
                'age'           => 8,
                'ingredients'   => [
                    $this->getReference('food-1'),
                    $this->getReference('food-44'),
                    $this->getReference('food-34'),
                ],
                'filling'       => '',
                'observation'   => 'Pour éveiller les papilles de votre enfant, remplacez la ciboulette par d\'autres herbes : aneth, persil, coriandre...'
            ),
            array(
                'name'          => 'Purée d\'épinards et de pommes de terre',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Epluchez et coupez les pommes de terre en gros morceaux.
                                    Plongez-les dans une grande casserole d'eau bouillante légèrement salée. Laissez cuire jusqu'à ce que la pointe d'un couteau s'enfonce très facilement dans la chair.
                                    Egouttez. Versez les pommes de terre dans un récipient et écrasez-les à la fourchette.
                                    En même temps, faites fondre les épinards à feu doux pour les faire décongeler.
                                    Ajoutez-les aux pommes de terre écrasées.
                                    Faites chauffer le lait Milumel 2ème âge préalablement reconstitué (voir le mode d'emploi sur la boite). Répartissez sur les légumes et réalisez une purée assez épaisse. Si vous souhaitez une consistance plus fluide, rajoutez du lait.
                                    Incorporez le filet d'huile d'olive, le basilic ciselé et mélangez.
                                    Servez bien chaud.",
                'preptime'      => '5 min',
                'cooktime'      => '15 min',
                'age'           => 6,
                'ingredients'   => [
                    $this->getReference('food-36'),
                    $this->getReference('food-45'),
                    $this->getReference('food-1'),
                    $this->getReference('food-29'),
                ],
                'filling'       => '',
                'observation'   => 'N\'hésitez pas à variez les légumes en utilisant des fonds d\'artichauts, des petits pois ou même de la courgette.'
            ),
            array(
                'name'          => 'Crème au caramel',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Faites chauffer le Lactel Eveil Nature et la crème liquide à feu moyen et sans faire bouillir.
                                    Pendant ce temps, battez les jaunes d’œufs avec 25 g de sucre jusqu’à ce que le mélange blanchisse. Versez tout en fouettant le mélange Lactel Eveil Nature et la crème sur la préparation précédente, puis remettez sur le feu jusqu’à ce que la crème épaississe.
                                    Laissez ramollir les feuilles de gélatine dans l’eau tiède, puis ajoutez-les à la crème.
                                    Préparez le caramel :
                                    Dans une casserole, faites fondre le reste du sucre avec 2 cuillères à soupe d’eau.
                                    Lorsqu’il commence à se colorer, retirez-le du feu et mélangez-le avec la crème.
                                    Répartissez cette préparation dans des ramequins et laissez prendre au réfrigérateur environ 2 heures.",
                'preptime'      => '10 min',
                'cooktime'      => '5 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-35'),
                    $this->getReference('food-29'),
                    $this->getReference('food-30'),
                    $this->getReference('food-20'),
                    $this->getReference('food-46'),
                ],
                'filling'       => '',
                'observation'   => 'Les petites crèmes au caramel sont des desserts gourmands à proposer occasionnellement à bébé.'
            ),
            array(
                'name'          => 'Mousse de potiron et de cabillaud',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Dans une casserole, versez le Lactel Eveil Nature et les morceaux de potiron.
                                    Laissez cuire environ 20 minutes à feu moyen avant de mixer et d’obtenir une purée bien lisse.
                                    Faites cuire les filets de cabillaud à la vapeur environ 10 minutes.
                                    Montez la crème liquide entière en chantilly.
                                    Dans un saladier, mélangez la purée de potiron et le cabillaud cuit émietté. Ajoutez délicatement la chantilly. Salez et poivrez légèrement.
                                    Répartissez cette préparation dans des moules ou des ramequins et laissez prendre au réfrigérateur environ 4 heures.",
                'preptime'      => '20 min',
                'cooktime'      => '30 min',
                'age'           => 10,
                'ingredients'   => [
                    $this->getReference('food-29'),
                    $this->getReference('food-0'),
                    $this->getReference('food-48'),
                    $this->getReference('food-49'),
                    $this->getReference('food-50'),

                ],
                'filling'       => '',
                'observation'   => ''
            ),
            array(
                'name'          => 'Clafoutis au saumon et au poireau',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Coupez le saumon en petits cubes.
                                    Lavez le poireau, et coupez-le en rondelles.
                                    Faites bouillir une casserole d’eau et plongez les rondelles de poireau et laissez-les cuire jusqu’à ce qu’elles soient bien tendres, égouttez-les en laissant un fond d’eau et mixez le tout pour obtenir une purée lisse.
                                    Préchauffez votre four à 175°C.
                                    Dans un bol, fouettez l’œuf, puis ajoutez la crème, le Lactel Eveil Nature et la farine.
                                    Mélangez jusqu’à l’obtention d’une pâte homogène.
                                    Ajoutez la purée de poireau et les cubes de saumon. Salez et poivrez légèrement.
                                    Répartissez la préparation dans des petits moules ou ramequins, puis enfournez environ 30 minutes.
                                    Laissez tiédir avant de servir à bébé.",
                'preptime'      => '20 min',
                'cooktime'      => '40 min',
                'age'           => 10,
                'ingredients'   => [
                    $this->getReference('food-51'),
                    $this->getReference('food-52'),
                    $this->getReference('food-30'),
                    $this->getReference('food-29'),
                    $this->getReference('food-24'),
                    $this->getReference('food-49'),
                    $this->getReference('food-50'),
                ],
                'filling'       => '',
                'observation'   => ''
            ),
            array(
                'name'          => 'Parmentier de tomate au thon',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Epluchez et coupez les pommes de terre en morceaux. Faites chauffer Eveil Croissance Nature dans une casserole à feu moyen et plongez-y les pommes de terre. Laissez cuire 15-20 minutes sans porter à ébullition.
                                    Pendant ce temps, ébouillantez la tomate pour la peler plus facilement et coupez-la en petits dés.
                                    Emiettez le thon et mélangez-le avec la ciboulette ciselée. Réservez.
                                    Lorsque les pommes de terre sont bien moelleuses, égouttez-les en conservant le liquide de cuisson. Ecrasez-les à la fourchette. Ajoutez le liquide de cuisson restant progressivement en mélangeant bien pour obtenir une purée un peu consistante. Ajoutez les dés de tomates. Salez légèrement.
                                    Dans un petit plat allant au four, étalez la moitié de la purée, puis le thon, enfin le reste de la purée.
                                    Passez au four pendant 10 minutes à 180°C.",
                'preptime'      => '5 min',
                'cooktime'      => '20 min',
                'age'           => 10,
                'ingredients'   => [
                    $this->getReference('food-36'),
                    $this->getReference('food-29'),
                    $this->getReference('food-12'),
                    $this->getReference('food-53'),
                    $this->getReference('food-34'),
                    $this->getReference('food-49'),
                ],
                'filling'       => '',
                'observation'   => 'Variez les herbes et optez pour du basilic ou du persil.'
            ),
            array(
                'name'          => 'Mug-cakes façon pizza',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Dans un saladier, mélangez les œufs, le Lactel Eveil Croissance au Lait Entier et l’huile d’olive, puis ajoutez la levure et la farine.
                                    Pelez et les tomates, et coupez-les en petits cubes.
                                    Coupez la mozzarella en dés.
                                    Ajoutez les dés de jambon, la mozzarella préalablement coupée (réservez-en 4 dés) et les cubes de tomates dans la pâte.
                                    Assaisonnez avec l’origan et un peu de sel et de poivre.
                                    Versez la préparation dans 4 mugs ou tasses, déposez un dé de mozzarella sur chacun puis faites cuire 3 minutes au micro-ondes puissance maximum.
                                    Laissez tiédir, vérifiez la température avant de servir à bébé.",
                'preptime'      => '15 min',
                'cooktime'      => '3 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-30'),
                    $this->getReference('food-29'),
                    $this->getReference('food-25'),
                    $this->getReference('food-24'),
                    $this->getReference('food-54'),
                    $this->getReference('food-55'),
                    $this->getReference('food-12'),

                ],
                'filling'       => '',
                'observation'   => ''
            ),
            array(
                'name'          => 'Petits clafoutis à la niçoise',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Pelez les tomates et le poivron, épépinez-les et coupez-les en petits cubes.
                                    Lavez la courgette et l’aubergine et coupez-les en petits dés.
                                    Pelez et émincez l’oignon.
                                    Faites chauffer l’huile d’olive dans une poêle et faites revenir tous les légumes à feu doux jusqu’à ce qu’ils soient fondants.
                                    Salez, poivrez légèrement et ajoutez un peu d’origan.
                                    Mélangez de sorte à obtenir une petite ratatouille.
                                    Préchauffez votre four à 160°C.
                                    Dans un saladier, mélangez les œufs, la farine et le Lactel Eveil Croissance au Lait Entier, puis ajoutez les légumes.
                                    Beurrez les moules à clafoutis ou ramequins. et versez-y la préparation.
                                    Enfournez 25 minutes, puis laissez tiédir et vérifiez la température avant de servir à bébé.",
                'preptime'      => '15 min',
                'cooktime'      => '45 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-12'),
                    $this->getReference('food-56'),
                    $this->getReference('food-57'),
                    $this->getReference('food-58'),
                    $this->getReference('food-59'),
                    $this->getReference('food-60'),
                    $this->getReference('food-49'),
                    $this->getReference('food-50'),
                    $this->getReference('food-61'),
                    $this->getReference('food-30'),
                    $this->getReference('food-24'),
                    $this->getReference('food-29'),
                ],
                'filling'       => '',
                'observation'   => ''
            ),
            array(
                'name'          => 'Flan de petits pois au chèvre frais',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Préchauffez votre four à 150°C.
                                    Égouttez les petits pois et mixez-les pour former une purée.
                                    Préparez une sauce béchamel avec la moitié du beurre, la farine et Eveil® Croissance Nature.
                                    Lorsque la sauce a épaissi, ajoutez, hors du feu, le chèvre frais émietté.
                                    Dans un bol, battez l’œuf. Incorporez-le à la béchamel puis ajoutez la purée de petits pois. Mélangez bien la préparation.
                                    Versez la préparation dans des petits moules en silicone afin de pouvoir démouler facilement.
                                    Placez-les dans un récipient contenant de l’eau chaude et laissez cuire 30 minutes au bain-marie.
                                    Démoulez et laissez tiédir.",
                'preptime'      => '10 min',
                'cooktime'      => '30 min',
                'age'           => 10,
                'ingredients'   => [
                    $this->getReference('food-37'),
                    $this->getReference('food-21'),
                    $this->getReference('food-29'),
                    $this->getReference('food-62'),
                    $this->getReference('food-30'),
                ],
                'filling'       => '',
                'observation'   => ''
            ),
            array(
                'name'          => 'Filet de sole roulé sur crème d\'asperges',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Lavez les asperges. Coupez les extrémités et pelez-les grossièrement.
                                    Coupez-les en tronçons, puis faites-les revenir dans le beurre.
                                    Versez Eveil® Croissance Nature, et laissez cuire à feu doux environ 15 minutes.
                                    Pendant ce temps, roulez le filet de sole sur lui-même, puis maintenez-le avec un cure-dent.
                                    Faites-le cuire à la vapeur pendant 10 minutes.
                                    Lorsque les asperges sont molles, ôtez la casserole du feu, puis mixez. Salez et mélangez.
                                    Versez la crème d’asperges dans une assiette creuse, et déposez le filet de sole cuit en prenant garde à retirer le cure-dent.
                                    Laissez tiédir quelques minutes avant de servir.",
                'preptime'      => '15 min',
                'cooktime'      => '25 min',
                'age'           => 10,
                'ingredients'   => [
                    $this->getReference('food-63'),
                    $this->getReference('food-21'),
                    $this->getReference('food-29'),
                    $this->getReference('food-49'),
                ],
                'filling'       => '',
                'observation'   => ''
            ),
            array(
                'name'          => 'Clafoutis framboises vanille',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Préchauffez le four à 180°C (th.6). Dans un saladier, mélangez la farine, le sucre et le sel. Incorporez peu à peu les œufs entiers et le Milumel froid, préalablement reconstitué, en fouettant entre chaque œuf.
                                    Fendez la gousse de vanille dans la longueur et grattez-la au-dessus du mélange.
                                    Beurrez 4 petits moules à tartelettes. Répartissez les framboises et versez la pâte dessus.
                                    Enfournez pour 30 minutes. Servez tiède ou froid.",
                'preptime'      => '10 min',
                'cooktime'      => '30 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-14'),
                    $this->getReference('food-4'),
                    $this->getReference('food-24'),
                    $this->getReference('food-20'),
                    $this->getReference('food-49'),
                    $this->getReference('food-30'),
                    $this->getReference('food-1'),
                ],
                'filling'       => '',
                'observation'   => 'Si vous n\'avez pas de gousse de vanille, troquez 20 g de sucre par du sucre vanillé. Le petit + : variez les fruits : prunes, poires ou cerises...'
            ),
            array(
                'name'          => 'Hachis Parmentier',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Remplir une casserole d’eau et déposez les pommes de terre à l’intérieur. Faites cuire pendant 20 minutes en plantant régulièrement un couteau dans une pomme de terre pour vérifier la cuisson.
                                    Epluchez et passez les pommes de terre au presse-purée. Chauffez le lait, versez les pommes de terre tout en mélangeant avec une cuillère en bois.
                                    Dans une poêle, faire revenir la viande, jusqu’à ce qu’elle soit bien cuite.
                                    Dans un plat à gratin, déposez une fine couche de purée, versez la viande, recouvrir du reste de purée. Parsemez de fromage râpé. Faites cuire 30 minutes.",
                'preptime'      => '25 min',
                'cooktime'      => '30 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-36'),
                    $this->getReference('food-29'),
                    $this->getReference('food-64'),
                ],
                'filling'       => '',
                'observation'   => ''
            ),
            array(
                'name'          => 'Tomates farcies',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Trempez le pain de mie dans le lait de croissance Lactel Eveil® Nature.
                                    Lavez les tomates, coupez un petit chapeau, les vider de leur pulpe puis les retourner 20 mn sur du papier absorbant pour les laisser s'égoutter.
                                    Mélangez la chair à la saucisse, le pain de mie, le thym et le persil.
                                    Remplissez la tomate de cette farce.
                                    Déposez les tomates dans un plat anti-adhésif et laissez cuire 30 mn à 220 C°.",
                'preptime'      => '50 min',
                'cooktime'      => '30 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-12'),
                    $this->getReference('food-65'),
                    $this->getReference('food-66'),
                ],
                'filling'       => '',
                'observation'   => ''
            ),
            array(
                'name'          => 'Clafoutis poêlé à l\'ananas',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Battez l'œuf jusqu'à l'obtention d'une texture lisse.
                                    Ajoutez la farine, le lait Lactel Eveil® Nature, puis l'ananas coupé en dés.
                                    Poêlez dans du beurre chaud.",
                'preptime'      => '5 min',
                'cooktime'      => '0 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-67'),
                    $this->getReference('food-30'),
                    $this->getReference('food-29'),
                    $this->getReference('food-24'),
                    $this->getReference('food-21'),

                ],
                'filling'       => '',
                'observation'   => ''
            ),
            array(
                'name'          => 'Gratin de courgettes',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Préchauffez votre four à 200°C.
                                    Déposez les rondelles de courgettes dans un plat allant au four.
                                    Dans un bol, battez l’oeuf et ajoutez la crème entière et l'Eveil® Nature.. Ajoutez la muscade et salez légèrement.
                                    Versez la préparation sur les courgettes et enfournez environ 25 minutes.
                                    Ajoutez le fromage râpé et enfournez à nouveau 5 minutes.
                                    Servez chaud en contrôlant la température.",
                'preptime'      => '10 min',
                'cooktime'      => '30 min',
                'age'           => 10,
                'ingredients'   => [
                    $this->getReference('food-57'),
                    $this->getReference('food-30'),
                    $this->getReference('food-29'),
                    $this->getReference('food-24'),
                    $this->getReference('food-35'),
                    $this->getReference('food-49'),
                    $this->getReference('food-68'),
                    $this->getReference('food-69'),
                ],
                'filling'       => '',
                'observation'   => 'Pensez à adapter la texture de ce plat selon votre bébé.
                                    Par exemple, pour les bébés qui ne sont pas habitués à la mastication, coupez les courgettes en petits morceaux ou mixez-les rapidement.'
            ),
            array(
                'name'          => 'Crêpe de pomme de terre',
                'recipeType'    => $this->getReference('recipeType-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => "Epluchez et essuyez la pomme de terre.
                                    Râpez la pomme de terre dans le mélange œuf battu et lait de croissance.
                                    Versez la préparation dans une poêle moyenne huilée (la crêpe doit être bien étalée) et laissez cuire 5 minutes de chaque côté sur feu assez vif.",
                'preptime'      => '5 min',
                'cooktime'      => '0 min',
                'age'           => 12,
                'ingredients'   => [
                    $this->getReference('food-36'),
                    $this->getReference('food-30'),
                    $this->getReference('food-29'),
                ],
                'filling'       => '',
                'observation'   => ''
            ),
        );

        foreach ($recipes as $i => $r) {
            $recipe = new Recipe();

            $recipe->setName($r['name']);
            $recipe->setRecipeType($r['recipeType']);
            $recipe->setSeason($r['season']);
            $recipe->setContent($r['content']);
            $recipe->setPreptime($r['preptime']);
            $recipe->setCooktime($r['cooktime']);
            $recipe->setAge($r['age']);
            foreach ($r['ingredients'] as $j => $f){
                $recipe->addIngredient($f);
                $f->addRecipe($recipe);
            }
            $recipe->setFilling($r['filling']);
            $recipe->setObservation($r['observation']);

            $manager->persist($recipe);
            $this->addReference('recipe-'.$i, $recipe);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 100;
    }

}