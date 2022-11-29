<section id="hotels">
    <h2>
        Hotels Stays:
    </h2>
    <div class="section">
        <?php
            foreach ($_SESSION['Hotel'] as $index => $Hotel) {

                if (get_class($Hotel) == "Hotels") {

                    echo "
                        <ul class='box'>
                            <li>" . $Hotel->getName() . "</li>
                            <li> Size: " . $Hotel->getBeds() . " </li> 
                            <li> Floors: " . $Hotel->getBooked() . "</li>
                            <br>
                            <br>
                            <li> R: " . $Hotel->getCPN() . "  </li>
                            <a>View Deal &#62;</a> 
                        </ul>
                    ";
                }
            }
        ?>
    </div>
</section>