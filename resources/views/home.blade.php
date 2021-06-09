@include('partials.header')

@include('partials.navbar')

{{-- Main Div including background img of Groningen and centered text --}}
<div class="main-div">
    <h1>PRE-SALE</h1>
    <h3>'Maximaal inspelen van de markt'</h3>
    <div class="main-div-buttons">
        <button class="btn-main">Contact</button>
        <button class="btn-main">Meer weten</button>
    </div>
</div>
{{-- Triple Icon div includes 3 icons with additional info in text --}}
<div class="triple-icon-div">
    <div class="triple-icon_one">
        <img class="triple-icon-img" src="/images/veelmeerleads.png" alt="veelmeerleads Image">
        <h3>Veel meer leads</h3>
        <p>Optas solestissin eos wer dolen</p>
    </div>
    <div class="triple-icon_two">
        <img class="triple-icon-img" src="/images/duidelijkeprijsbepaling.png" alt="Duidelijke prijs bepaling Image">
        <h3>Duidelijke prijs bepaling</h3>
        <p>Optas solestissin eos wer dolen</p>
    </div>
    <div class="triple-icon_three">
        <img class="triple-icon-img" src="/images/hogerrendement.png" alt="Hoger rendement Image">
        <h3>Hoger rendement</h3>
        <p>Optas solestissin eos dolen fds</p>
    </div>
</div>
<div class="underline"></div>
{{-- Laptop div which includes an image of a laptop and text on the left side --}}
<div class="laptop-div">
        <img src="/images/laptop_bg.png" alt="PNG image of a laptop">
    <div class="laptop-div-left">
        <h1 class="laptop-div-title">PRESALE IS</h1>
        <p> De pre-sale fase binnen een project is een methode om een ontwikkeld
             nieuwbouwproject te toetsen bij de eventuele koper.
             Bij de presale fase worden de woningtypes zichtbaar gemaakt met afbeeldingen,
              omschrijving en het verwachte prijsniveau.
              De informatie op bouwnummerniveau mist op dat moment nog.
              Door enkele maanden actief campagne te voeren wordt er een actueel
              beeld zichtbaar of het ontwikkelde product in lijn ligt met de vraag van de
               markt.
        </p>
        <p>
            Om uiteindelijk mee te bewegen kan er in deze fase besloten worden
             om het prijsniveau bij te stellen, de faseringen aan te passen
              of de woningtypes te veranderen. Als blijkt dat er helemaal geen vraag
               is naar het product kan je je afvragen of je in verkoop moet gaan
               of dat er een ander product dient te komen. De pre-sale fase geeft meer
               garantie voor betere verkoop.
        </p>
        <button class="btn-laptop">Meer weten</button>
    </div>
</div>
{{-- Grey divs with info on the left side, and an image on the right side --}}
<div class="grey-div">
    <div class="grey-div-left">
        <h1 id="grey-div-first-h1">UITLEG</h1>
        <p>Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es aut Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es au
        </p>
        <div class="grey-div-left-subjects">
            <h1>LEADS</h1>
            <p>Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. <br> Lacesti aut adiciendio. Et es aut</p>
        </div>
        <div class="grey-div-left-subjects">
            <h1>PRIJZEN</h1>
            <p>Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. <br> Lacesti aut adiciendio. Et es aut</p>
        </div>
        <div class="grey-div-left-subjects">
            <h1>GRAFIEKEN</h1>
            <p>Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. <br> Lacesti aut adiciendio. Et es aut</p>
        </div>
    </div>
    <div class="grey-div-right">
        <img class="grey-div-right-icon1" src="/images/veelmeerleads.png" alt="veelmeerleads Image">
        <img class="grey-div-right-icon2" src="/images/duidelijkeprijsbepaling.png" alt="veelmeerleads Image">
        <img class="grey-div-right-icon3" src="/images/hogerrendement.png" alt="Hoger rendement Image">
    </div>
</div>
{{-- Pricing packages, two cards with options, one basic and one premium --}}
<div class="pricing-div">
    <h1>PRIJZEN</h1>
    <div class="underline"></div>
    <div class="pricing-card-outer">
        <div class="pricing-card">
            <div class="pricing-card-top">
                <h2>Basic</h2>
                <div class="pricing-card-price-outer">
                    <div class="pricing-card-price-inner">
                        $1296,-
                    </div>
                </div>
            </div>
            <div class="pricing-card-body">
                <p>
                    Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti
                    iduciumet as molectatur solut fuga. Lacesti aut adiciendio.
                    Et es aut Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti
                    iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es aut Eos
                    wer dolenEhenimus.
                </p>
                <button class="btn-pricing">Bestel</button>
            </div>
        </div>
        <div class="pricing-card">
            <div class="pricing-card-top">
                <h2>Premium</h2>
                <div class="pricing-card-price-outer">
                    <div class="pricing-card-price-inner">
                        $1576,-
                    </div>
                </div>
            </div>
            <div class="pricing-card-body">
                <p>
                    Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti
                    iduciumet as molectatur solut fuga. Lacesti aut adiciendio.
                    Et es aut Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti
                    iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es aut Eos
                    wer dolenEhenimus.
                </p>
                <button class="btn-pricing">Bestel</button>
            </div>
        </div>
    </div>
</div>
{{-- Contact form, a form with 3 input fields asking for name, phone number and email --}}
<div class="contact-form">
    <h1>CONTACT</h1>
    <div class="underline"></div>
    <h2>Wij zullen zo spoedig mogelijk contact <br> met jullie opnemen</h2>
    <form class="form" action="#">
        <input type="text" name="name" id="name" placeholder="Naam">
        <input type="text" name="phonenumber" id="phonenumber" placeholder="Telefoonnummer">
        <input type="email" name="email" id="email" placeholder="Email adres">
        <button class="btn-form">Zoek contact</button>
    </form>
</div>

@include('partials.footer')
