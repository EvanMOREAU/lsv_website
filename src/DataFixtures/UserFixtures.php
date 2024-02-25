<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('evan.moreau@etik.com');
        $user->setRoles(['ROLE_SUPER_ADMIN']);
        $user->setIdentifier('67dd3199fc4508e4d4778c47a38fd970d4c2ab90');

        $hashedPassword = $this->passwordEncoder->encodePassword($user, 'admin');
        $user->setPassword($hashedPassword);
        $user->setIsHandcuffed(false); // Par défaut à false

        // Ajoutez d'autres attributs selon vos besoins
        $user->setFirstname('Lloyd');
        $user->setLastname('Zetrus');
        $user->setJob('police');
        $user->setJobGrade(2);
        $user->setJob2('unemployed');
        $user->setJob2Grade(0);
        $user->setGroup('admin');
        $user->setCreatedAt(new \DateTime('2024-01-26 19:25:50'));
        $user->setLastSeen(new \DateTime('2024-02-25 18:14:59'));
        $user->setAccounts(['bank' => 26201, 'black_money' => 7565, 'money' => 2433]);
        $user->setInventory(['scratch_ticket' => 3]);
        $user->setLoadout(['WEAPON_RPG' => ['ammo' => 1], 'WEAPON_PISTOL' => ['ammo' => 0], 'WEAPON_ASSAULTRIFLE' => ['ammo' => 0], 'WEAPON_RAILGUN' => ['ammo' => 0]]);
        $user->setCraftingLevel(null); // Ajoutez la valeur appropriée
        $user->setPosition(['y' => 2263.292236328125, 'x' => -2715.151611328125, 'heading' => 286.2991943359375, 'z' => 19.9619140625]);
        $user->setDateOfBirth('27/12/2004');
        $user->setSex('m');
        $user->setHeight(187);
        $user->setSkin(['hair_color_2' => 0, 'nose_6' => 0, /* ... Ajoutez les autres attributs */]);
        $user->setStatus([['name' => 'hunger', 'percent' => 0.0, 'val' => 0], ['name' => 'thirst', 'percent' => 0.0, 'val' => 0]]);
        $user->setIsDead(false); // Ajoutez la valeur appropriée
        $user->setDisabled(false); // Ajoutez la valeur appropriée
        $user->setLastProperty(null); // Ajoutez la valeur appropriée
        $user->setHotbar(null); // Ajoutez la valeur appropriée

        $manager->persist($user);

        $baba = new User();
        $baba->setIdentifier('559cb7be4fc740faa66930ee6b4d2e30f0b2d932');
        $baba->setFirstname('Baba');
        $baba->setLastname('Rolando');
        $baba->setJob('police');
        $baba->setJobGrade(3);
        $baba->setJob2('unemployed');
        $baba->setJob2Grade(0);
        $baba->setGroup('admin');
        $baba->setCreatedAt(new \DateTime('2024-01-26 00:03:33'));
        $baba->setLastSeen(new \DateTime('2024-02-25 18:14:59'));
        $baba->setAccounts('{"bank":204250,"black_money":71520,"money":1000000000989000}');
        $baba->setInventory('[]');
        $baba->setLoadout('{"WEAPON_RPG":{"ammo":0},"WEAPON_PISTOL":{"ammo":0},"WEAPON_ASSAULTRIFLE":{"ammo":1},"WEAPON_MINIGUN":{"ammo":0}}');
        $baba->setCraftingLevel(null); // À remplir selon les besoins
        $baba->setPosition('{"y":1883.6834716796876,"x":-2633.287841796875,"heading":22.67716407775879,"z":156.79931640625}');
        $baba->setDateOfBirth('19/05/2000');
        $baba->setSex('m');
        $baba->setHeight(190);
        $baba->setSkin('{"chest_3":0,"bracelets_1":-1,"eyebrows_1":0,"decals_1":0,"sun_2":0,"tshirt_2":0,"blemishes_1":0,"chin_3":0,"mask_2":0,"blush_3":0,"shoes_1":3,"moles_1":0,"pants_1":23,"nose_6":0,"bodyb_1":-1,"skin_md_weight":50,"bags_2":0,"chest_1":0,"chest_2":0,"eyebrows_2":0,"cheeks_1":0,"chin_4":0,"watches_1":-1,"blush_2":0,"beard_1":0,"shoes_2":0,"eyebrows_6":0,"makeup_1":0,"lipstick_3":0,"helmet_2":0,"hair_color_1":0,"tshirt_1":15,"beard_2":0,"arms_2":0,"nose_3":0,"face_md_weight":50,"sun_1":0,"beard_3":0,"hair_1":0,"lipstick_4":0,"mask_1":0,"chin_2":0,"nose_2":0,"torso_2":0,"jaw_1":0,"ears_1":-1,"lipstick_2":0,"beard_4":0,"age_2":0,"bodyb_3":-1,"dad":0,"arms":1,"hair_color_2":0,"helmet_1":-1,"complexion_2":0,"bproof_2":0,"age_1":0,"hair_2":0,"sex":0,"nose_5":0,"cheeks_3":0,"cheeks_2":0,"ears_2":0,"torso_1":26,"chain_1":0,"eye_squint":0,"makeup_3":0,"blemishes_2":0,"glasses_2":0,"nose_4":0,"chin_1":0,"watches_2":0,"lipstick_1":0,"bodyb_4":0,"pants_2":1,"bracelets_2":0,"eyebrows_4":0,"lip_thickness":0,"jaw_2":0,"blush_1":0,"nose_1":0,"mom":21,"bproof_1":0,"decals_2":0,"moles_2":0,"eyebrows_5":0,"complexion_1":0,"eye_color":0,"chain_2":0,"makeup_2":0,"glasses_1":0,"bodyb_2":0,"neck_thickness":0,"bags_1":0,"makeup_4":0,"eyebrows_3":0}');
        $baba->setStatus('[{"name":"hunger","percent":0.0,"val":0},{"name":"thirst","percent":0.0,"val":0}]');
        $baba->setIsDead(0);
        $baba->setDisabled(0);
        $baba->setLastProperty(null); // À remplir selon les besoins
        $baba->setHotbar('{"2":{"type":"item_weapon","name":"WEAPON_RPG","label":"Lance-rocket"},"1":{"type":"item_weapon","name":"WEAPON_MINIGUN","label":"Minigun"},"0":{"name":"WEAPON_PISTOL","type":"item_weapon","label":"Pistolet"}}');
        $baba->setEmail('evan.moreau@etik.com');
        $baba->setRoles(['ROLE_SUPER_ADMIN']);
        $baba->setIsHandcuffed(false);

        // Utiliser le password encoder de Symfony pour hasher le mot de passe
        $hashedPassword = $this->passwordEncoder->encodePassword($baba, 'admin');
        $baba->setPassword($hashedPassword);

        $manager->persist($baba);
        $erwann = new User();
        $erwann->setIdentifier('b8cdc28cfe006d74d49a13cc0781fb0361a5ce50');
        $erwann->setFirstname('Renard du Turfu');
        $erwann->setLastname('scuty');
        $erwann->setJob('cardealer');
        $erwann->setJobGrade(1);
        $erwann->setJob2('unemployed');
        $erwann->setJob2Grade(0);
        $erwann->setGroup('admin');
        $erwann->setCreatedAt(new \DateTime('2024-01-31 18:13:07'));
        $erwann->setLastSeen(new \DateTime('2024-02-25 16:21:39'));
        $erwann->setAccounts('{"bank":11500,"black_money":9981,"money":2500}');
        $erwann->setInventory('{"bread":10}');
        $erwann->setLoadout('{"WEAPON_MILITARYRIFLE":{"ammo":10},"WEAPON_PISTOL":{"ammo":0}}');
        $erwann->setCraftingLevel(null); // À remplir selon les besoins
        $erwann->setPosition('{"z":26.4154052734375,"y":-1103.4066162109376,"x":-41.31428527832031,"heading":223.93701171875}');
        $erwann->setDateOfBirth('01/01/2001');
        $erwann->setSex('m');
        $erwann->setHeight(180);
        $erwann->setSkin('{"chin_1":0,"beard_2":0,"watches_1":-1,"face_md_weight":50,"jaw_1":0,"eye_squint":0,"ears_2":0,"shoes_2":0,"moles_1":0,"arms_2":0,"age_2":0,"blemishes_2":0,"nose_6":0,"bags_1":0,"cheeks_3":0,"chin_4":0,"blush_1":0,"bproof_2":0,"torso_1":0,"nose_5":0,"blush_3":0,"dad":0,"hair_color_1":0,"eyebrows_3":0,"nose_1":0,"ears_1":-1,"hair_1":0,"nose_2":0,"jaw_2":0,"mom":0,"bags_2":0,"bodyb_2":0,"mask_1":0,"chain_1":0,"tshirt_1":0,"eye_color":0,"pants_1":0,"chest_1":0,"nose_3":0,"chin_2":0,"decals_2":0,"cheeks_1":0,"chest_3":0,"bracelets_2":0,"decals_1":0,"pants_2":0,"bproof_1":0,"lip_thickness":0,"glasses_2":0,"glasses_1":0,"bodyb_4":0,"eyebrows_4":0,"lipstick_1":0,"beard_1":0,"lipstick_3":0,"cheeks_2":0,"age_1":0,"chin_3":0,"chain_2":0,"shoes_1":0,"mask_2":0,"bodyb_1":-1,"blemishes_1":0,"neck_thickness":0,"hair_2":0,"sun_1":0,"bodyb_3":-1,"arms":0,"beard_3":0,"blush_2":0,"eyebrows_6":0,"sex":0,"lipstick_4":0,"makeup_2":0,"lipstick_2":0,"skin_md_weight":50,"tshirt_2":0,"makeup_3":0,"beard_4":0,"helmet_1":-1,"makeup_4":0,"eyebrows_2":0,"complexion_1":0,"torso_2":0,"makeup_1":0,"complexion_2":0,"sun_2":0,"moles_2":0,"nose_4":0,"chest_2":0,"eyebrows_5":0,"hair_color_2":0,"bracelets_1":-1,"watches_2":0,"eyebrows_1":0,"helmet_2":0}');
        $erwann->setStatus('[{"name":"hunger","percent":0.0,"val":0},{"name":"thirst","percent":0.0,"val":0}]');
        $erwann->setIsDead(0);
        $erwann->setDisabled(0);
        $erwann->setLastProperty(null); // À remplir selon les besoins
        $erwann->setHotbar('{"0":{"type":"item_weapon","label":"Pistolet","name":"WEAPON_PISTOL"}}');
        $erwann->setEmail(null); // À remplir selon les besoins
        $erwann->setRoles([]);
        $erwann->setIsHandcuffed(false);

        // Utiliser le password encoder de Symfony pour hasher le mot de passe
        $hashedPassword = $this->passwordEncoder->encodePassword($erwann, 'votre_mot_de_passe');
        $erwann->setPassword($hashedPassword);

        $manager->persist($erwann);
        $manager->flush();
    }
}
