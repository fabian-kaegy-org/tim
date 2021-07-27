<?php
/**
 * Template Name: Bus Plan - Interaktiv
 *
 * @package Tim
 */

$page_title = wp_strip_all_tags( get_the_title() );
?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
		<title><?php echo esc_html( $page_title ); ?></title>
		<meta property="og:title" content="<?php echo esc_html( $page_title ); ?>" />
		<meta property="og:image" content="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" />

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<main id="page" class="site">
			<header class="section-header">
				<img width="360" height="240" class="hero-image" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="" />
				<h1 class="page-title">WVT5 Möbelausbau</h1>
				<h2>Baupläne & Materiallisten</h2>
			</header>
			<section class="section-einleitung" id="einleitung">
				<h2>Einleitung</h2>
				<p>
					Hey! - freut mich mega, dass dir mein Bus-Ausbau gefällt!
					Ich hoffe mit den folgenden Plänen und Materiallisten kann ich dir bei der Umsetzung deines Bus-Projekts helfen und dir einiges an Arbeit sparen! Falls du weitere Fragen hast, die durch diese Pläne noch nicht beantwortet werden schreibe mir einfach gerne nochmal auf Instagram oder per Mail. Ich bin froh, wenn ich dir helfen kann! :)
					Bevor du loslegst noch ein kleiner Disclaimer: Das hier ist sicher keine detaillierte Anleitung, wie man die Möbel 1:1 nachbauen kann, sondern vielmehr eine Aufarbeitung der Baupläne und Bestelllisten von meinem Ausbau, welche als Orientierung und Inspirationsquelle dienen soll. Ich habe mich aber bemüht, alles so detailliert und ordentlich wie möglich zu dokumentieren! - Als Veranschaulichung werde ich hier und da immer wieder auf Stellen in meinen YouTube Videos verweisen :)
				</p>
				<h3>Herangehensweise</h3>
				<p>
					Zu Beginn möchte ich dir noch ein kleines Learning von meinem ersten Umbau mit auf den Weg geben. Damals hatte ich eine grobe Vorstellung, wie der Bus später einmal aussehen könnte - aber das meiste hat sich eigentlich während dem Bauen selbst ergeben. Ich habe also Fächer gebaut und danach geschaut, was darin Platz finden könnte. Dadurch habe ich viel Platz verschenkt und oft Unordnung im Bus gehabt.
				</p>
				<p>
					Bevor ich bei meinem zweiten Ausbau die genaue Aufteilung der Möbel plante, habe ich mir erstmal überlegt, welche Gegenstände ich später in meinem Bus haben möchte. Für all diese Gegenstände habe ich von Anfang an Platzhalter erstellt und Diese direkt in die Möbelplanung mit einbezogen. Das war eines der wichtigsten Dinge, die ich durch meinen ersten Ausbau gelernt habe: <b>Jedes Objekt braucht seinen festen Platz im Bus!</b><br />
					Hier siehst du exemplarisch ein paar Platzhalter der Gegenstände, für die ich extra Fächer gebaut habe, sodass sie einen festen Platz im Bus haben werden:
				</p>
				<figure>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/items.svg" alt="" width="517" height="150">
				</figure>
				<p>
					Aber auch für kleinere Dinge wie Klamotten, Lebensmittel und Hygieneartikel habe ich von Anfang an schon feste Plätze im Bus eingeplant.
				</p>
			</section>
			<section class="section-aufteilung" id="aufteilung">
				<h2>1. Aufteilung</h2>
				<figure>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/gesamt-top.svg" alt="" width="517" height="835">
					<figcaption>
						<b>Abb.1:</b> Allgemeine Aufteilung und Außenmaße der Möbel von oben. Die gestrichelten Formen stellen Auszüge oder Klappen dar.
					</figcaption>
				</figure>
				<figure>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/gesamt-side.svg" alt="">
					<figcaption>
						<b>Abb.2:</b> Allgemeine Aufteilung und Außenmaße der Möbel (bzw. der Möbelfronten) aus Sicht der Schiebetür (in Fahrtrichtung rechts).
					</figcaption>
				</figure>
				<figure>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/gesamt-back.svg" alt="">
					<figcaption>
						<b>Abb.3:</b> Allgemeine Aufteilung und Außenmaße der Möbel aus Sicht des Fahrersitzes nach hinten.
					</figcaption>
				</figure>
				<figure>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/gesamt-front.svg" alt="">
					<figcaption>
						<b>Abb.4:</b> Allgemeine Aufteilung und Außenmaße der Möbel von hinten, durch die Heckklappe.
					</figcaption>
				</figure>
				<p>
					In den nächsten Kapiteln gehe ich nochmal detaillierter auf die einzelnen Möbelstücke (Küche, Seitenschrank & Bett) ein. Nach jeder, genau bemaßten Skizze findest du eine kleine Liste mit den verwendeten Materialien für das jeweilige Möbelstück. Außerdem habe ich alle Holzplatten, die ich verwendet habe aufgelistet, und Skizzen angefertigt, wie ich die Jeweiligen Holzplatten zugeschnitten habe!
				</p>
			</section>
			<section class="section-kueche" id="kueche">
				<h2>2. Küche</h2>
				<h3>2.1 Skizzen</h3>
				<figure>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/kuechen-skizze.svg" alt="">
					<figcaption>
						<b>Abb.5:</b> Aufteilung der Küchenmöbel aus der Top-Ansicht. Die gestrichelten Linien stellen Auszüge oder Klappen dar.
					</figcaption>
				</figure>
				<p>
					<b>Bemerkung zur Skizze:</b><br />
					Die dunklen, waagerechten Rechtecke stellen 18mm starke Multiplexplatten dar. Die helleren, senkrechten Rechtecke stehen für Latten, welche die Multiplex platten Verbinden und stabilisieren.<br />
				</p>
				<p>
					Für besseres Verständnis:<br />
					<a href="https://youtu.be/BixFxdGmDM0?t=21" target="_blank">https://youtu.be/BixFxdGmDM0?t=21</a>
				</p>
				<figure>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/kuechen-front.svg" alt="">
					<figcaption>
						<b>Abb.6:</b> Aufteilung der Küchenfronten aus Sicht der Schiebetür.
					</figcaption>
				</figure>
				<figure>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/kueche-front-innen.svg" alt="">
					<figcaption>
						<b>Abb.7:</b> Aufteilung der Küchenmöbel ohne Fronten aus Sicht der Schiebetür.
					</figcaption>
				</figure>
				<p>
					Das Waschbecken habe ich mir aus einem standardisierten GN-Behälter 2/3 gebaut. - Ist um einiges Billiger als ein Campingwaschbecken, funktioniert aber genauso gut!<br />
				</p>
				<p>
					Für besseres Verständnis:<br/>
					<a href="https://youtu.be/BixFxdGmDM0?t=227" target="_blank" rel="noreferer noopener">https://youtu.be/BixFxdGmDM0?t=227</a>
				</p>
				<figure>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/kueche-kuehlschrank.svg" alt="">
					<figcaption>
						<b>Abb.8:</b> Seitenansicht des Kühlschrankauszugs, der Besteck-Schublade und des ausziehbaren Tischs.
					</figcaption>
				</figure>
				<h2>2.2 Materialliste</h2>
				<!-- INSERT TABLE HERE -->
				<h2>2.3 Holzzuschnitte</h2>
				<p>
					Mein Gesamtes Holz habe ich bei einem regionalen Holzhandel gekauft. Dieser bietet Multiplex-, Sperrholz-, Siebdruck- und OSB3 Platten in festen großen sowie individuell zugeschnitten in allen möglichen stärken an. Soweit ich weiß liefert der Holzhandel aber auch Deutschland weit. Vielleicht ist für Dich ja auch etwas dabei:<br />
					<a href="https://rombs-gmbh.de/plattenware/?p=1" target="_blank" rel="noreferer noopener">https://rombs-gmbh.de/plattenware/?p=1</a>
				</p>
				<p>
					In der folgenden Tabelle siehst du meine Holzbestellung für die Küche. Die Preise orientierten sich dabei an dem regionalen Holzhandel. Die Stärken des Holzes würde ich bei der Küche jederzeit wieder so wählen.
				</p>
				<!-- INSERT TABLE HERE -->
				<p>
					Einige der Platten muss man noch zuschneiden, um sie verbauen zu können. Ich habe auf der nächsten Seite mal skizziert, wie ich die, in der obigen Liste aufgeführten, Sperrholz- Platten zugesägt habe.<br />
					Die nicht skizzierten Platten mussten entweder nicht zugeschnitten werden, oder lediglich an die Form des Busses angepasst werden.
				</p>
				<figure>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/kueche-schnitt-1.svg" alt="">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/kueche-schnitt-2.svg" alt="">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/kueche-schnitt-3.svg" alt="">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/kueche-schnitt-4.svg" alt="">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/kueche-schnitt-5.svg" alt="">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/kueche-schnitt-6.svg" alt="">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/van-plan-interaktiv/kueche-schnitt-8.svg" alt="">
					<figcaption>
						<b>Abb.9:</b> Zuschnitte für die Konstruktion der Küche
					</figcaption>
				</figure>
			</section>
			<section class="section-schrank" id="schrank">
				<h2>3. Schrank</h2>
				<h3>3.1 Skizzen</h3>
				<figure>
					<!-- Insert Graphic here -->
					<figcaption>
						<b>Abb.10:</b> Aufteilung der Seitenschrank-Fronten aus Sicht der Schiebetür.
					</figcaption>
				</figure>
				<figure>
					<!-- Insert Graphic here -->
					<figcaption>
						<b>Abb.11:</b> Aufteilung des Seitenschranks (ohne Fronten) aus Sicht der Schiebetür mit Beschriftung der jeweiligen Fächer und deren Inhalt.
					</figcaption>
				</figure>
				<p>
					Falls du genauer sehen willst, wie ich die Innenelemente des Schranks gebaut habe, ohne einen einzigen Winkel zu verwenden, schau dir dir entsprechende Stelle dazu im Video nochmal an:<br />
					<a href="https://youtu.be/BixFxdGmDM0?t=93" target="_blank" rel="noreferer noopener">https://youtu.be/BixFxdGmDM0?t=93</a>
				</p>
				<figure>
					<!-- Insert Graphic here -->
					<figcaption>
						<b>Abb.12:</b> Top-Ansicht des Seitenschranks. Die gestrichelten Linien stellen Klappen oder Schubladen dar.
					</figcaption>
				</figure>
				<p>
					<b>Anmerkungen zur Skizze:</b><br />
					Hinter der rechten Klappe habe ich mein Bad verbaut. An der Tür habe ich kleine Gummi- Aufhänger und einen kleinen Spiegel verbaut.
				</p>
				<p>
					Für besseres Verständnis:<br />
					<a href="https://youtu.be/OMZJ_nouXD0?t=308" target="_blank" rel="noreferer noopener">https://youtu.be/OMZJ_nouXD0?t=308</a>
				</p>
				<p>
					Bei den Flügeltüren des Seitenschranks war es mir besonders wichtig, dass ich diese auch von außen noch entspannt öffnen kann, also habe ich hier 160° Scharniere statt den üblichen 90° Scharnieren verbaut.
				</p>
				<figure>
					<!-- Insert Graphic here -->
					<figcaption>
						<b>Abb.13:</b> Aufteilung und Außenmaße des Seitenschranks von hinten, durch die Heckklappe.
					</figcaption>
				</figure>
				<figure>
					<!-- Insert Graphic here -->
					<figcaption>
						<b>Abb.14:</b> Aufteilung und Außenmaße des Seitenschranks aus Sicht des Fahrersitzes nach hinten.
					</figcaption>
				</figure>
				<h3>3.2 Materiallisten</h3>
				<!-- INSERT TABLE HERE -->
				<h3>3.2 Holzzuschnitte</h3>
				<!-- INSERT TABLE HERE -->
				<p>
					<b>Anmerkungen zur Holzbestellung des Schranks:</b><br />
					bei Nr. 6,7 & 8, also den oberen Innenelementen des Seitenschranks kannst du definitiv auch auf dünneres Holz zurückgreifen und etwas Gewicht sparen. Die 18mm starken Platten sind hier nicht Notwendig.
				</p>
				<figure>
					<!-- Insert Graphic here -->
					<figcaption>
						<b>Abb.15:</b> Zuschnitte für die Konstruktion des Seitenschranks
					</figcaption>
				</figure>
			</section>
			<section class="section-bett" id="bett">
				<h2>4. Bett</h2>
				<h3>4.1 Skizzen</h3>
				<figure>
					<!-- Insert Graphic here -->
					<figcaption>
						<b>Abb.16:</b> Aufbau und Maße des Betts aus der Top-Ansicht.
					</figcaption>
				</figure>
				<figure>
					<!-- Insert Graphic here -->
					<figcaption>
						<b>Abb.17:</b> Aufbau und Maße des Betts aus Sicht der Schiebetür (Fahrtrichtung rechts)
					</figcaption>
				</figure>
				<p>
					Die 3 Querstreben unter dem Lattenrost dienen als Führung des ausziehbaren Teils. Durch die Quersten kann dieser nicht herunterfallen und bleibt auf der gleichen Höhe. Die linken Enden des ausziehbaren Teils sind abgerundet, sodass sie an den Querstreben nicht hängenbleiben.
				</p>
				<figure>
					<!-- Insert Graphic here -->
					<figcaption>
						<b>Abb.18:</b> Aufbau und Maße des Betts aus Sicht des Fahrersitzes nach hinten.
					</figcaption>
				</figure>
				<figure>
					<!-- Insert Graphic here -->
					<figcaption>
						<b>Abb.19:</b> Aufbau und Maße des Betts von hinten, durch die Heckklappe.
					</figcaption>
				</figure>
				<p>
					Die beiden vorderen Stützen auf dem linken Bild in Abbildung 16 sind versetzt, sodass die vorderen Stützen beim Ausziehen nicht an den Griffen der Küche hängenbleiben. Damit sie leicht über den Boden gleiten habe ich die Füße mit Fils beklebt.
				</p>
				<h3>4.2 Materiallisten</h3>
				<!-- INSERT TABLE HERE -->
				<p><i>
					* Damit die Kisten genau unter das Bett passen, musste ich das oberste Brett absägen. Für den dunklen Look habe ich die Kisten noch mit Nussbaum Holzlasur bearbeitet.
				</i></p>
				<h3>4.3 Holzzuschnitte</h3>
				<!-- INSERT TABLE HERE -->
			</section>
			<section class="section-landstrom" id="landstrom">
				<h2>5. Landstrom</h2>
				<p>
					Meinen Landstrom habe ich einfach über zwei Batterie-Ladegeräte und eine Mehrfachsteckdose gelöst. Dabei bin ich wie folgt vorgegangen:
					Die Outdoor Steckdosenleiste liegt im Motorrad bei der Startbatterie. Das Kabel der Steckdosenleiste dient später als das Kabel, welches mit einem Verlängerungskabel an den Landstrom geschlossen werden kann. Ans ende setze ich noch den Personenschutz-Adapter um das Ganze abzusichern.<br />
					An einen der beiden Steckdosen kommt nun eins der beiden Ladegeräte, welches nun die Startbatterie Laden kann. In die andere Steckdose kommt die 3 Fach Steckdosenleiste, welche ich durch die Kabeldurchführung zum Motorraum, unter der Fußmatte bis unter den Fahrersitz gelegt habe. Um das Kabel durch die Kabeldurchführung zu bekommen musst du den Stecker kappen und nach dem Durchführen den Schutzkontakt-Stecker anbringen. Das zweite Batterieladegerät lädt nun meine Zweitbatterie unter dem Fahrersitz. Die anderen beiden Steckdosen können normal genutzt werden, sobald der Landstrom angeschlossen ist.
				</p>
				<p>
					Hier erklärte ich die Funktionsweise des Landstroms nochmal ganz kurz:<br />
					<a href="https://youtu.be/OMZJ_nouXD0?t=65" target="_blank">https://youtu.be/OMZJ_nouXD0?t=65</a>
				</p>
				<h3>5.1 Materialliste</h3>
				<!-- INSERT TABLE HERE -->
			</section>
			<section class="section-sonstiges" id="sonstiges">
				<h2>6. Sonstiges</h2>
				<h3>6.1 Materialliste</h3>
				<!-- INSERT TABLE HERE -->
			</section>
			<section class="section-schlusswort" id="schlusswort">
				<h2>Schlusswort</h2>
				<p>
					Ich hoffe sehr, dass dir die Pläne und Listen bei deinem Busprojekt weiterhelfen konnten und ich dir eventuell einiges an Arbeit ersparen konnte! Wie oben schon geschrieben, kannst du dich bei weiteren Fragen jederzeit gerne bei mir melden! - Vielleicht trifft man sich ja auch mal OnTour!
				</p>
				<p>
					Ich habe die Pläne absichtlich kostenlos zur Verfügung gestellt, da ich so vielen Leute wie möglich bei ihrem Busprojekt weiterhelfen möchte und so jeder selbst entscheiden kann, wieviel im die Pläne wert sind. Wenn dir die Pläne also weitergeholfen haben, kannst du mich sehr gerne durch eine kleine Spende bei meinen weiteren Reisen unterstützen! Ich würde mich freuen!
				</p>
				<p>
					Ganz liebe Grüße und allzeit gute Fahrt!<br /> Tim Kägy
				</p>
				<p><a href="paypal.me/timkaegy" target="_blank">paypal.me/timkaegy</a></p>
		</main>

		<?php wp_footer(); ?>
	</body>
</html>
