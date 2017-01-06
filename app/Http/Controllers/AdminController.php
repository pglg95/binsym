<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function installCurrencies(){

        $currency=new Currency();
        $currency->code='EUR/USD';
        $currency->description='EUR/USD to jedna z najpopularniejszych i jednocześnie najpłynniejszych par walutowych, będąca obiektem zainteresowania zarówno traderów detalicznych, jak i instytucjonalnych. Łącząca w sobie waluty jednych z największych światowych gospodarek jest jednym z najczęściej komentowanych przez analityków oraz ekonomistów instrumentów. Jej kurs w dużej mierze zależny jest od obecnej sytuacji gospodarczej strefy euro oraz Stanów Zjednoczonych. Notowania cały czas utrzymują się jednak nad poziomem parytetu (1.00) – oznacza to, że waluta bazowa (w tym przypadku EUR), jest cały czas droższe od waluty kwotowanej (w tym przypadku USD). Brokerzy detaliczni na parze EUR/USD oferują jedne z najniższych spreadów oraz prowizji.';
        $currency->return_value_1=85;
        $currency->return_value_2=77;
        $currency->save();

        $currency=new Currency();
        $currency->code='USD/JPY';
        $currency->description='Bazą pary walutowej USD/JPY jest dolar amerykański, kwotowany jest jen japoński. Obydwie waluty są jednymi z najistotniejszych na świecie. Wprawdzie jen japoński nie wywiera dużego wpływu na Polskę (od kursu mogą zależeć ceny elektroniki), to już w regionie Pacyfiku jest to znacząca waluta. USD/JPY jest również jedną z par walutowych najczęściej wybieranych przez inwestorów. Do 2010 roku na parze miał miejsce długoterminowy trend spadkowy, wtedy osiągnięto minimum na poziomie 75,60. Potem nastąpiło odwrócenie trendu i dynamiczna aprecjacja dolara względem jena. Obecnie para znajduje się w okolicach poziomu 120,00, choć zdarzały się momenty w historii, gdy była notowana powyżej 200,00. USD/JPY od roku znajduje się w dosyć szerokiej konsolidacji, kierunek wybicia jeszcze nie jest przesądzony.';
        $currency->return_value_1=82;
        $currency->return_value_2=70;
            $currency->save();

        $currency=new Currency();
        $currency->code='GBP/USD';
        $currency->description='GBP/USD, czy też popularny Kabel to jedna z najistotniejszych par walutowych na współczesnym rynku. Łączy w sobie drugą co do wielkości walutę europejską (GBP) oraz walutę najsilniejszej gospodarki świata (USD). Ta pierwsza jest tutaj walutą bazową, kolejna natomiast kwotowaną. Notowania pary mówią nam więc ile dolarów kupimy za jednego funta, lub ile dolarów musimy sprzedać, aby tego jednego funta uzyskać. Trendy na parze generowane są przede wszystkim przez stan gospodarki obu państw oraz politykę pieniężną, którą prowadzą. Od ostatnich 10 lat można obserwowaćjednak systematyczne osłabianie się GBP w stosunku do USD i poruszanie w okolicach rekordowych, historycznych dołków.';
        $currency->return_value_1=81;
        $currency->return_value_2=76;
            $currency->save();

        $currency=new Currency();
        $currency->code='EUR/GBP';
        $currency->description='Para krzyżowa (potocznie cross) w której walutą bazową jest euro (EUR) a walutą kwotowaną jest z kolei funt szterling (GBP). Euro jest walutą krajów Unii Europejskiej i w 2016 roku było używana w dziewiętnastu z nich. Dodatkowo 6 krajów niezwiązanych z Unią Europejską na mocy umów międzynarodowych zobowiązało się do używania EUR. Para EUR/GBP zaliczana jest do najpopularniejszych crossów na rynku, z powodu połączenia dwóch najważniejszych walut Europy. Funt jest walutą Londynu - historycznego centrum finansowego wciąż pozostającego ważnym ośrodkiem handlu. Historyczny szczyt EUR/GBP pojawił się na wykresie pod koniec 2008 roku po cenie 0,9803 natomiast dotychczas niepokonane minimum miało miejsce w roku 2000 po cenie 0,5686.';
        $currency->return_value_1=80;
        $currency->return_value_2=71;
            $currency->save();

        $currency=new Currency();
        $currency->code='USD/CHF';
        $currency->description='Walutą bazową pary USD/CHF jest dolar amerykański, kwotowany jest frank szwajcarski. Obydwie waluty cieszą się długa tradycją i zaufaniem ze strony inwestorów. Sytuacja na USD/CHF potrafiła zmieniać się dosyć dynamicznie na przestrzeni lat. Obecnie jesteśmy w fazie długookresowego trendu spadkowego widocznego na wykresie miesięcznym USD/CHF. Para znajduje się w tym trendzie od 2001 roku, od wtedy spadła z poziomu 1,8230 w okolice 0,9900 widoczne obecnie. Mocne zawahanie ceny miało miejsce w styczniu 2015 roku, gdy szwajcarski bank centralny postanowił uwolnić kurs franka i w rezultacie USD/CHF straciło jednego dnia kilkanaście procent wartości i znalazło się na poziomie 0,7350. Historyczna minimum miało miejsce dwa lata wcześniej, wtedy USD/CHF kosztowało 0,7080.';
        $currency->return_value_1=80;
        $currency->return_value_2=75;
            $currency->save();

        $currency=new Currency();
        $currency->code='EUR/JPY';
        $currency->description='Para walutowa EUR/JPY składa się z euro (waluty bazowej) oraz japońskiego jena (waluty kwotowanej). W ujęciu historycznym jen jest walutą charakteryzującą się niską rentownością, w związku z tym może być interesującą alternatywą dla wielu inwestorów – szczególnie chcących wziąć tańszą pożyczkę w jenach, aby zakupić bardziej rentowne EUR. W czasie rynkowych stresów oraz zaburzeń EUR/JPY staje się jednak bardzo wrażliwą na silne ruchy rynkowego sentymentu – zmienność wzmagać mogą również dane fundamentalne dotyczące kryzysu zadłużenia w strefie euro, jak i działania mające zapobiegać niskim poziomom inflacyjnym na Starym Kontynencie i w Kraju Kwitnącej Wiśni. Jako, że EUR i JPY to druga i trzecia z najpopularniejszych światowych walut, para EUR/JPY cieszy się dużą popularnością wśród inwestorów.';
        $currency->return_value_1=80;
        $currency->return_value_2=75;
            $currency->save();

        $currency=new Currency();
        $currency->code='EUR/CHF';
        $currency->description='Para krzyżowa (potocznie cross) w której walutą bazową jest euro (EUR) a walutą kwotowaną jest z kolei szwajcarski frank (CHF). Euro jest walutą krajów Unii Europejskiej i w 2016 roku było używana w dziewiętnastu z nich. Dodatkowo 6 krajów niezwiązanych z Unią Europejską na mocy umów międzynarodowych zobowiązało się do używania EUR. Frank szwajcarski jest postrzegany na rynku jako waluta bezpieczna - szczególnie pożądana gdy na rynku pojawia się strach. Historyczny szczyt EUR/CHF pojawił się w październiku 2007 roku po cenie 1,6828 z kolej minimum wszechczasów miało miejsce w styczniu 2015, kiedy to po decyzji SNB EUR/CHF musnęło poziom 0,9031.';
        $currency->return_value_1=79;
        $currency->return_value_2=71;
            $currency->save();

        $currency=new Currency();
        $currency->code='USD/CAD';
        $currency->description='Bazą pary walutowej USD/CAD jest dolar amerykański, a walutą kwotowaną dolar kanadyjski. Te dwa kraje sąsiadujące ze sobą mają za sobą długą drogę wspólnej wymiany handlowej, jak również swoich walut. Dolara amerykańskiego oznacza się skrótem USD (lub symbolem $), a dolara kanadyjskiego jako CAD (bądź CAN $). Na międzynarodowym rynku walutowym Forex USD/CAD można śledzić od 1986 roku. Zazwyczaj to dolar amerykański jest więcej warty, chociaż w latach 2007-2013 były momenty, gdy to dolar kanadyjski był wart więcej. Obecnie na parze USD/CAD trwa długoterminowy trend wzrostowy, możemy zobaczyć, że w ciągu dwóch lat cena podniosła się z poziomu parytetu w okolice 1,39. Jak większość par walutowych, ta również jest kwotowana do czterech miejsc po przecinku.';
        $currency->return_value_1=82;
        $currency->return_value_2=75;
            $currency->save();

        $currency=new Currency();
        $currency->code='AUD/USD';
        $currency->description='AUD/USD to jedna z najpopularniejszych par walutowych na rynku FX, zaliczająca się do koszyka tak zwanych majorsów (czyli par głównych). Walutą bazową jest dolar kanadyjski, natomiast walutą kwotowaną dolar amerykański. W środowisku traderskim para bardzo często określana jest również mianem „Aussie”. Wpływ na notowania waluty mają czynniki oddziałujące zarówno na dolara australijskiego, jak i na amerykańskiego – mowa tutaj między innymi o różnicy stóp procentowych pomiędzy Bankiem Rezerw Australii (RBA) oraz Rezerwy Federalnej (FED). AUD/USD często znajduje się w odwrotnej korelacji do par USD/CAD, USD/CHF oraz USD/JPY – między innymi dlatego, że USD jest tutaj walutą kwotowaną, a nie bazową.';
        $currency->return_value_1=85;
        $currency->return_value_2=77;
            $currency->save();

        $currency=new Currency();
        $currency->code='GBP/JPY';
        $currency->description='Para walutowa GBPJPY pomimo tego, że nie zawiera w sobie dolara amerykańskiego jest jedną z popularniejszych zarówjo wśród traderów europejskich, jak i japońskich. Połączenie w jedną parę walut dwóch silnych światowych gospodarek gwarantuje nie tylko bardzo wysokie dzienne obroty, ale również płynność – tak istotną w przypadku analizy technicznej. GBP pełni tutaj rolę waluty nadrzędnej (bazowej), JPY natomiast waluty kwotowanej. Oznacza to, że notowania pary mówią nam ile jenów będziemy w stanie kupić za jednego funta (na przykład 150). Historyczne szczyty w przypadku waloru rozrysowywane były w trakcie kryzysu finansowego z 2007 roku na poziomie ponad 251.00 – od tego momentu cena nawet na chwilę nie zbliżyła się w te okolice.';
        $currency->return_value_1=80;
        $currency->return_value_2=70;
            $currency->save();


    }

}
