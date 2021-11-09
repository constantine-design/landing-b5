<?php
$host = $_SERVER['HTTP_HOST'];
$host_link = '<a href="https://'.$host.'">https://'.$host."/</a>";
?>

<?php if ( !(isset($is_landing) && $is_landing==true) ) exit; ?>

    <!-- Footer modal content -->
    <h2 class="mt-3 mb-4">SITE&nbsp;: <?= SITE_NAME ?></h2>

		<h3>ARTICLE 1&nbsp;: PRÉAMBULE</h3>
		<p>Cette politique de confidentialité s'applique au site&nbsp;: <?= SITE_NAME ?>.</p>
		<p>La présente politique de confidentialité a pour but d'exposer aux utilisateurs du site&nbsp;:</p>
		<ul>
		   <li>La manière dont sont collectées et traitées leurs données à caractère personnel. Doivent être considérées comme données personnelles toutes les données étant susceptibles d'identifier un utilisateur. Il s'agit notamment du prénom et du nom, de l'âge, de l'adresse postale, l'adresse mail, la localisation de l'utilisateur ou encore son adresse IP&nbsp;;</li>
		   <li>Quels sont les droits des utilisateurs concernant ces données&nbsp;;</li>
		   <li>Qui est responsable du traitement des données à caractère personnel collectées et traitées&nbsp;;</li>
		   <li>A qui ces données sont transmises&nbsp;;</li>
		   <li>Eventuellement, la politique du site en matière de fichiers "cookies".</li>
		</ul>
		<p>Cette politique de confidentialité complète les mentions légales et les Conditions Générales d'Utilisation que les utilisateurs peuvent consulter à l'adresse ci-après&nbsp;: <b><?= $host_link ?></b></p>

		<h3>ARTICLE 2&nbsp;: PRINCIPES GÉNÉRAUX EN MATIÈRE DE COLLECTE ET DE TRAITEMENT DE DONNÉES</h3>
		<p>Conformément aux dispositions de l'article 5 du Règlement européen 2016/679, la collecte et le traitement des données des utilisateurs du site respectent les principes suivants&nbsp;:</p>
		<ul>
		   <li>Licéité, loyauté et transparence&nbsp;: les données ne peuvent être collectées et traitées qu'avec le consentement de l'utilisateur propriétaire des données. A chaque fois que des données à caractère personnel seront collectées, il sera indiqué à l'utilisateur que ses données sont collectées, et pour quelles raisons ses données sont collectées&nbsp;;</li>
		   <li>Finalités limitées&nbsp;: la collecte et le traitement des données sont exécutés pour répondre à un ou plusieurs objectifs déterminés dans les présentes conditions générales d'utilisation&nbsp;;</li>
		   <li>Minimisation de la collecte et du traitement des données&nbsp;: seules les données nécessaires à la bonne exécution des objectifs poursuivis par le site sont collectées&nbsp;;</li>
		   <li>Conservation des données réduites dans le temps&nbsp;: les données sont conservées pour une durée limitée, dont l'utilisateur est informé. Lorsque cette information ne peut pas être communiquée, l'utilisateur est informé des critères utilisés pour déterminer la durée de conservation&nbsp;;</li>
		   <li>Intégrité et confidentialité des données collectées et traitées&nbsp;: le responsable du traitement des données s'engage à garantir l'intégrité et la confidentialité des données collectées.</li>
		</ul>
		<p>Afin d'être licites, et ce conformément aux exigences de l'article 6 du règlement européen 2016/679, la collecte et le traitement des données à caractère personnel ne pourront intervenir que s'ils respectent au moins l'une des conditions ci-après énumérées&nbsp;:</p>
		<ul>
		   <li>L'utilisateur a expressément consenti au traitement&nbsp;;</li>
		   <li>Le traitement est nécessaire à la bonne exécution d'un contrat&nbsp;;</li>
		   <li>Le traitement répond à une obligation légale&nbsp;;</li>
		   <li>Le traitement s'explique par une nécessité liée à la sauvegarde des intérêts vitaux de la personne concernée ou d'une autre personne physique&nbsp;;</li>
		   <li>Le traitement peut s'expliquer par une nécessité liée à l'exécution d'une mission d'intérêt public ou qui relève de l'exercice de l'autorité publique&nbsp;;</li>
		   <li>Le traitement et la collecte des données à caractère personnel sont nécessaires aux fins des intérêts légitimes et privés poursuivis par le responsable du traitement ou par un tiers.</li>
		</ul>

		<h3>ARTICLE 3&nbsp;: DONNÉES À CARACTÈRE PERSONNEL COLLECTÉES ET TRAITÉES DANS LE CADRE DE LA NAVIGATION SUR LE SITE</h3>

    <p class="lead mt-4"> DONNÉES COLLECTÉES ET TRAITÉES ET MODE DE COLLECTE</p>
		<p>Les données à caractère personnel collectées sur le site <?= SITE_NAME ?> sont les suivantes&nbsp;:</p>
		<p>Nom, prénom, email et téléphone.</p>
		<p>Ces données sont collectées lorsque l'utilisateur effectue l'une des opérations suivantes sur le site&nbsp;:</p>
		<p>Lorsque l'utilisateur s'inscrit sur le site.</p>
		<p>Le responsable du traitement conservera dans ses systèmes informatiques du site et dans des conditions raisonnables de sécurité l'ensemble des données collectées pour une durée de&nbsp;:</p>
    <ul>
      <li>Cookies du site&nbsp;: 13 mois</li>
      <li>Données des prospects&nbsp;: 3 ans</li>
    </ul>
		<p>La collecte et le traitement des données répondent aux finalités suivantes&nbsp;:</p>
    <ul>
      <li>Réponses aux demandes d'informations des prospects</li>
      <li>Assurer un suivi client personnalisé</li>
    </ul>

		<p>Les traitements de données effectués sont fondés sur les bases légales suivantes&nbsp;:</p>
    <ul>
      <li>exécution du contrat</li>
    </ul>

		<p class="lead mt-4"> TRANSMISSION DES DONNÉES A DES TIERS</p>
		<p>Les données à caractère personnel collectées par le site ne sont transmises à aucun tiers, et ne sont traitées que par l'éditeur du site.</p>

		<p class="lead mt-4"> HÉBERGEMENT DES DONNÉES</p>
		<p>Le site <?= SITE_NAME ?> est hébergé par&nbsp;: OVH, dont le siège est situé à l'adresse ci-après&nbsp;:</p>
		<p>2 rue Kellermann - 59100 Roubaix - France</p>
		<p>Les données collectées et traitées par le site sont exclusivement hébergées et traitées en France.</p>

    <h3>ARTICLE 4&nbsp;: RESPONSABLE DU TRAITEMENT DES DONNÉES</h3>

		<p class="lead mt-4"> LE RESPONSABLE DU TRAITEMENT DES DONNÉES</p>

		<p>Le responsable du traitement des données est chargé de déterminer les finalités et les moyens mis au service du traitement des données à caractère personnel.</p>

		<p class="lead mt-4"> OBLIGATIONS DU RESPONSABLE DU TRAITEMENT DES DONNÉES</p>

		<p>Le responsable du traitement s'engage à protéger les données à caractère personnel collectées, à ne pas les transmettre à des tiers sans que l'utilisateur n'en ait été informé et à respecter les finalités pour lesquelles ces données ont été collectées.</p>
		<p>Le site dispose d'un certificat SSL afin de garantir que les informations et le transfert des données transitant par le site sont sécurisés.</p>
		<p>Un certificat SSL ("Secure Socket Layer" Certificate) a pour but de sécuriser les données échangées entre l'utilisateur et le site.</p>
		<p>De plus, le responsable du traitement des données s'engage à notifier l'utilisateur en cas de rectification ou de suppression des données, à moins que cela n'entraîne pour lui des formalités, coûts et démarches disproportionnés.</p>
		<p>Dans le cas où l'intégrité, la confidentialité ou la sécurité des données à caractère personnel de l'utilisateur est compromise, le responsable du traitement s'engage à informer l'utilisateur par tout moyen.</p>

    <h3>ARTICLE 5&nbsp;: DROITS DE L'UTILISATEUR</h3>

		<p>Conformément à la réglementation concernant le traitement des données à caractère personnel, l'utilisateur possède les droits ci-après énumérés.</p>
		<p>Afin que le responsable du traitement des données fasse droit à sa demande, l'utilisateur est tenu de lui communiquer&nbsp;: ses prénom et nom ainsi que son adresse e-mail, et si cela est pertinent, son numéro de compte ou d'espace personnel ou d'abonné.</p>
		<p>Le responsable du traitement des données est tenu de répondre à l'utilisateur dans un délai de 30 (trente) jours maximum.</p>
		<ol>
		   <li>Présentation des droits de l'utilisateur en matière de collecte et traitement de données</li>
		   <li>Droit d'accès, de rectification et droit à l'effacement</li>
		</ol>
		<p>L'utilisateur peut prendre connaissance, mettre à jour, modifier ou demander la suppression des données le concernant, en respectant la procédure ci-après énoncée&nbsp;:</p>
		<p>L'utilisateur doit envoyer un mail à <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p>
		<p>S'il en possède un, l'utilisateur a le droit de demander la suppression de son espace personnel en suivant la procédure suivante&nbsp;:</p>
		<p>L'utilisateur doit envoyer un mail à <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p>

    <p class="lead mt-4"> Droit à la portabilité des données</p>
		<p>L'utilisateur a le droit de demander la portabilité de ses données personnelles, détenues par le site, vers un autre site, en se conformant à la procédure ci-après&nbsp;:</p>
		<p>L'utilisateur doit envoyer un mail à <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p>

    <p class="lead mt-4"> Droit à la limitation et à l'opposition du traitement des données</p>
		<p>L'utilisateur a le droit de demander la limitation ou de s'opposer au traitement de ses données par le site, sans que le site ne puisse refuser, sauf à démontrer l'existence de motifs légitimes et impérieux, pouvant prévaloir sur les intérêts et les droits et libertés de l'utilisateur.</p>
		<p>Afin de demander la limitation du traitement de ses données ou de formuler une opposition au traitement de ses données, l'utilisateur doit suivre la procédure suivante&nbsp;:</p>
		<p>L'utilisateur doit envoyer un mail à <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p>

    <p class="lead mt-4"> Droit de ne pas faire l'objet d'une décision fondée exclusivement sur un procédé automatisé</p>
		<p>Conformément aux dispositions du règlement 2016/679, l'utilisateur a le droit de ne pas faire l'objet d'une décision fondée exclusivement sur un procédé automatisé si la décision produit des effets juridiques le concernant, ou l'affecte de manière significative de façon similaire.</p>

    <p class="lead mt-4"> Droit de déterminer le sort des données après la mort</p>
		<p>Il est rappelé à l'utilisateur qu'il peut organiser quel doit être le devenir de ses données collectées et traitées s'il décède, conformément à la loi n°2016-1321 du 7 octobre 2016.</p>

    <p class="lead mt-4"> Droit de saisir l'autorité de contrôle compétente</p>
		<p>Dans le cas où le responsable du traitement des données décide de ne pas répondre à la demande de l'utilisateur, et que l'utilisateur souhaite contester cette décision, ou, s'il pense qu'il est porté atteinte à l'un des droits énumérés ci-dessus, il est en droit de saisir la CNIL (Commission Nationale de l'Informatique et des Libertés, https://www.cnil.fr) ou tout juge compétent.</p>

    <p class="lead mt-4"> Données personnelles des personnes mineures</p>
		<p>Conformément aux dispositions de l'article 8 du règlement européen 2016/679 et à la loi Informatique et Libertés, seuls les mineurs âgés de 15 ans ou plus peuvent consentir au traitement de leurs données personnelles.</p>
		<p>Si l'utilisateur est un mineur de moins de 15 ans, l'accord d'un représentant légal sera requis afin que des données à caractère personnel puissent être collectées et traitées.</p>
		<p>L'éditeur du site se réserve le droit de vérifier par tout moyen que l'utilisateur est âgé de plus de 15 ans, ou qu'il aura obtenu l'accord d'un représentant légal avant de naviguer sur le site.</p>

    <h3>ARTICLE 6&nbsp;: UTILISATION DES FICHIERS "COOKIES"</h3>

		<p>Le site a éventuellement recours aux techniques de "cookies".</p>
		<p>Un "cookie" est un fichier de petite taille (moins de 4 ko), stocké par le site sur le disque dur de l'utilisateur, contenant des informations relatives aux habitudes de navigation de l'utilisateur.</p>
		<p>Ces fichiers lui permettent de traiter des statistiques et des informations sur le trafic, de faciliter la navigation et d'améliorer le service pour le confort de l'utilisateur.</p>
		<p>Pour l'utilisation de fichiers "cookies" impliquant la sauvegarde et l'analyse de données à caractère personnel, le consentement de l'utilisateur est nécessairement demandé.</p>
		<p>Ce consentement de l'utilisateur est considéré comme valide pour une durée de 6 (six) mois maximum. A l'issue de cette période, le site demandera à nouveau l'autorisation de l'utilisateur pour enregistrer des fichiers "cookies" sur son disque dur.</p>

    <p class="lead mt-4"> Opposition de l'utilisateur à l'utilisation de fichiers "cookies" par le site</p>
		<p>Les cookies non essentiels au fonctionnement du site ne sont déposés sur le terminal de l'utilisateur qu'après avoir obtenu son consentement. L'utilisateur peut retirer son consentement à tout moment, de la manière suivante&nbsp;:</p>
		<p>L'utilisateur doit envoyer un mail à <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p>
		<p>De manière plus générale, il est porté à la connaissance de l'utilisateur qu'il peut s'opposer à l'enregistrement de ces fichiers "cookies" en configurant son logiciel de navigation.</p>
		<p>Pour information, l'utilisateur peut trouver aux adresses suivantes les démarches à suivre afin de configurer son logiciel de navigation pour s'opposer à l'enregistrement des fichiers "cookies"&nbsp;:</p>

    <ul>
		   <li><strong>Chrome</strong>&nbsp;: https://support.google.com/accounts/answer/61416?hl=fr</li>
		   <li><strong>Firefox</strong>&nbsp;: https://support.mozilla.org/fr/kb/enable-and-disable-cookies-website-preferences</li>
		   <li><strong>Safari</strong>&nbsp;: http://www.apple.com/legal/privacy/fr-ww/</li>
		   <li><strong>Internet Explorer</strong>&nbsp;: https://support.microsoft.com/fr-fr/help/17442/windows-internet-explorer-delete-manage-cookies</li>
		   <li><strong>Opera</strong>&nbsp;: http://www.opera.com/help/tutorials/security/cookies/</li>
		</ul>

		<p>Dans le cas où l'utilisateur décide de désactiver les fichiers "cookies", il pourra poursuivre sa navigation sur le site. Toutefois, tout dysfonctionnement du site provoqué par cette manipulation ne pourrait être considéré comme étant du fait de l'éditeur du site.</p>

    <p class="lead mt-4"> Description des fichiers "cookies" utilisés par le site</p>
		<p>L'éditeur du site attire l'attention de l'utilisateur sur le fait que les cookies suivants sont utilisés lors de sa navigation&nbsp;:</p>
    <ul>
      <li>Google Analytics</li>
    </ul>

    <h3>ARTICLE 7&nbsp;: CONDITIONS DE MODIFICATION DE LA POLITIQUE DE CONFIDENTIALITÉ</h3>

		<p>La présente politique de confidentialité peut être consultée à tout moment à l'adresse ci-après indiquée&nbsp;:</p>
		<p>L'éditeur du site se réserve le droit de la modifier afin de garantir sa conformité avec le droit en vigueur.</p>
		<p>Par conséquent, l'utilisateur est invité à venir consulter régulièrement cette politique de confidentialité afin de se tenir informé des derniers changements qui lui seront apportés.</p>
		<p>Il est porté à la connaissance de l'utilisateur que la dernière mise à jour de la présente politique de confidentialité est intervenue le&nbsp;: 19/07/2021.</p>

    <h3>ARTICLE 8&nbsp;: ACCEPTATION PAR L'UTILISATEUR DE LA POLITIQUE DE CONFIDENTIALITÉ</h3>

		<p>En naviguant sur le site, l'utilisateur atteste avoir lu et compris la présente politique de confidentialité et en accepte les conditions, en ce qui concerne plus particulièrement la collecte et le traitement de ses données à caractère personnel, ainsi que l'utilisation de fichiers "cookies".</p>
