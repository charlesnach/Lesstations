<?php $bodyClass = 'home'; ?>
<?php $title = 'Destinations de vacances été/hiver'; ?>
<?php $description = ''; ?> 
<?php require('./sections/head.php'); ?>
<!-- CONTENT --> 
<!-- IMAGE WITH TEXT -->
  <section class="section-spacing npt">
    <div class="container">
      <div class='image-with-text-overlay'>
        <div class='content-medium'>
          <div class='prose'>
            <h2 class="h1">Trouvez votre séjour idéal</h2>
          </div>

          <form class='mainBookingForm flexbox'>
            <div class='flexbox'>
              
              <div class="bx--form-item">
                <label for="text-input-1" class="bx--label">Text field label</label>
                <input id="text-input-1" type="text" class="bx--text-input" placeholder="Hint text here">
              </div>

              <div class="bx--form-item">
                <div data-date-picker data-date-picker-type="range" class="bx--date-picker bx--date-picker--range" id="date-picker">
                  <div class="bx--date-picker-container">
                    <label for="date-picker-1" class="bx--label">Start date label</label>
                    <input type="text" id="date-picker-1" class="bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy"
                      data-date-picker-input-from />
                  </div>
                  <div class="bx--date-picker-container">
                    <label for="date-picker-2" class="bx--label">End date label</label>
                    <input type="text" id="date-picker-2" class="bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy"
                      data-date-picker-input-to />
                  </div>
                  <svg data-date-picker-icon class="bx--date-picker__icon" width="14" height="16" viewBox="0 0 14 16">
                    <path d="M0 5h14v1H0V5zm3-5h1v4H3V0zm7 0h1v4h-1V0zM0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 0 14.5v-12zm1 0v12a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5z"
                      fill-rule="nonzero" />
                  </svg>
                </div>
              </div>

              <div>
                <div data-numberinput class="bx--number">
                  <div class="bx--number__controls">
                    <div class="bx--number__control-btn up-icon">+</div>
                    <div class="bx--number__control-btn down-icon">-</div>
                  </div>
                  <label for="number-input" class="bx--label">Number Input label</label>
                  <input class='bx--number-input' id="number-input" type="number" min="1" max="50" value="1">
                </div>
              </div>

            </div>
            <?php echo '<a href="'.SCRIPT_ROOT.'/resultats" class="button button--primary">'; ?>L</a>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- ICONS -->
  <section>
    <div class="container">
      <ul class='reassurance'>
        <li class='ico'>
          <div class='circle bg_orange'>
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.8461 9.16864L12.2562 2.2901C11.8486 1.87206 11.299 1.65519 10.7403 1.66715C10.1817 1.65444 9.6313 1.87131 9.22448 2.2901L2.51869 9.16864C2.40278 9.28754 2.40577 9.47749 2.52467 9.59266L3.21043 10.2605C3.32934 10.3764 3.51929 10.3734 3.63445 10.2545L4.34564 9.5246V16.7741C4.34564 16.9401 4.48025 17.0739 4.64552 17.0739H8.35551L8.357 18.0334C8.357 18.1994 8.49161 18.3333 8.65688 18.3333H9.6141C9.78012 18.3333 9.91398 18.1987 9.91398 18.0334V17.0739H16.7738C16.9398 17.0739 17.0737 16.9393 17.0737 16.7741V9.56947L17.7303 10.2545C17.8462 10.3734 18.0354 10.3756 18.1543 10.2605L18.8401 9.59266C18.959 9.47674 18.9612 9.28754 18.8461 9.16864ZM9.91398 15.5177V12.1457L11.4523 12.1413L11.4583 15.5177H9.91398ZM15.516 15.5177H13.0152L13.007 10.8804C13.007 10.7144 12.8724 10.5805 12.7071 10.5805H11.7499C11.7424 10.5805 11.7349 10.582 11.7275 10.5828L9.67094 10.5888C9.64925 10.5835 9.62682 10.5805 9.60363 10.5805H8.64641C8.48039 10.5805 8.34653 10.7151 8.34653 10.8804L8.35326 15.5177H5.90262V7.92799L10.3395 3.37669C10.4158 3.29892 10.4913 3.25928 10.5661 3.24059C10.6214 3.22115 10.6805 3.21068 10.7426 3.21068C10.8106 3.21068 10.8757 3.22414 10.9355 3.24657C11.0028 3.26826 11.0724 3.30789 11.1397 3.37669L15.516 7.94444V15.5177Z" fill="white"/>
            </svg>
          </div>
          <span>15 000 biens sélectionnés</span>
        </li>

        <li class='ico'>
          <div class='circle bg_orange'>
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.8461 9.16864L12.2562 2.2901C11.8486 1.87206 11.299 1.65519 10.7403 1.66715C10.1817 1.65444 9.6313 1.87131 9.22448 2.2901L2.51869 9.16864C2.40278 9.28754 2.40577 9.47749 2.52467 9.59266L3.21043 10.2605C3.32934 10.3764 3.51929 10.3734 3.63445 10.2545L4.34564 9.5246V16.7741C4.34564 16.9401 4.48025 17.0739 4.64552 17.0739H8.35551L8.357 18.0334C8.357 18.1994 8.49161 18.3333 8.65688 18.3333H9.6141C9.78012 18.3333 9.91398 18.1987 9.91398 18.0334V17.0739H16.7738C16.9398 17.0739 17.0737 16.9393 17.0737 16.7741V9.56947L17.7303 10.2545C17.8462 10.3734 18.0354 10.3756 18.1543 10.2605L18.8401 9.59266C18.959 9.47674 18.9612 9.28754 18.8461 9.16864ZM9.91398 15.5177V12.1457L11.4523 12.1413L11.4583 15.5177H9.91398ZM15.516 15.5177H13.0152L13.007 10.8804C13.007 10.7144 12.8724 10.5805 12.7071 10.5805H11.7499C11.7424 10.5805 11.7349 10.582 11.7275 10.5828L9.67094 10.5888C9.64925 10.5835 9.62682 10.5805 9.60363 10.5805H8.64641C8.48039 10.5805 8.34653 10.7151 8.34653 10.8804L8.35326 15.5177H5.90262V7.92799L10.3395 3.37669C10.4158 3.29892 10.4913 3.25928 10.5661 3.24059C10.6214 3.22115 10.6805 3.21068 10.7426 3.21068C10.8106 3.21068 10.8757 3.22414 10.9355 3.24657C11.0028 3.26826 11.0724 3.30789 11.1397 3.37669L15.516 7.94444V15.5177Z" fill="white"/>
            </svg>
          </div>
          <span>15 000 biens sélectionnés</span>
        </li>

        <li class='ico'>
          <div class='circle bg_orange'>
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.8461 9.16864L12.2562 2.2901C11.8486 1.87206 11.299 1.65519 10.7403 1.66715C10.1817 1.65444 9.6313 1.87131 9.22448 2.2901L2.51869 9.16864C2.40278 9.28754 2.40577 9.47749 2.52467 9.59266L3.21043 10.2605C3.32934 10.3764 3.51929 10.3734 3.63445 10.2545L4.34564 9.5246V16.7741C4.34564 16.9401 4.48025 17.0739 4.64552 17.0739H8.35551L8.357 18.0334C8.357 18.1994 8.49161 18.3333 8.65688 18.3333H9.6141C9.78012 18.3333 9.91398 18.1987 9.91398 18.0334V17.0739H16.7738C16.9398 17.0739 17.0737 16.9393 17.0737 16.7741V9.56947L17.7303 10.2545C17.8462 10.3734 18.0354 10.3756 18.1543 10.2605L18.8401 9.59266C18.959 9.47674 18.9612 9.28754 18.8461 9.16864ZM9.91398 15.5177V12.1457L11.4523 12.1413L11.4583 15.5177H9.91398ZM15.516 15.5177H13.0152L13.007 10.8804C13.007 10.7144 12.8724 10.5805 12.7071 10.5805H11.7499C11.7424 10.5805 11.7349 10.582 11.7275 10.5828L9.67094 10.5888C9.64925 10.5835 9.62682 10.5805 9.60363 10.5805H8.64641C8.48039 10.5805 8.34653 10.7151 8.34653 10.8804L8.35326 15.5177H5.90262V7.92799L10.3395 3.37669C10.4158 3.29892 10.4913 3.25928 10.5661 3.24059C10.6214 3.22115 10.6805 3.21068 10.7426 3.21068C10.8106 3.21068 10.8757 3.22414 10.9355 3.24657C11.0028 3.26826 11.0724 3.30789 11.1397 3.37669L15.516 7.94444V15.5177Z" fill="white"/>
            </svg>
          </div>
          <span>15 000 biens sélectionnés</span>
        </li>

        <li class='ico'>
          <div class='circle bg_orange'>
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.8461 9.16864L12.2562 2.2901C11.8486 1.87206 11.299 1.65519 10.7403 1.66715C10.1817 1.65444 9.6313 1.87131 9.22448 2.2901L2.51869 9.16864C2.40278 9.28754 2.40577 9.47749 2.52467 9.59266L3.21043 10.2605C3.32934 10.3764 3.51929 10.3734 3.63445 10.2545L4.34564 9.5246V16.7741C4.34564 16.9401 4.48025 17.0739 4.64552 17.0739H8.35551L8.357 18.0334C8.357 18.1994 8.49161 18.3333 8.65688 18.3333H9.6141C9.78012 18.3333 9.91398 18.1987 9.91398 18.0334V17.0739H16.7738C16.9398 17.0739 17.0737 16.9393 17.0737 16.7741V9.56947L17.7303 10.2545C17.8462 10.3734 18.0354 10.3756 18.1543 10.2605L18.8401 9.59266C18.959 9.47674 18.9612 9.28754 18.8461 9.16864ZM9.91398 15.5177V12.1457L11.4523 12.1413L11.4583 15.5177H9.91398ZM15.516 15.5177H13.0152L13.007 10.8804C13.007 10.7144 12.8724 10.5805 12.7071 10.5805H11.7499C11.7424 10.5805 11.7349 10.582 11.7275 10.5828L9.67094 10.5888C9.64925 10.5835 9.62682 10.5805 9.60363 10.5805H8.64641C8.48039 10.5805 8.34653 10.7151 8.34653 10.8804L8.35326 15.5177H5.90262V7.92799L10.3395 3.37669C10.4158 3.29892 10.4913 3.25928 10.5661 3.24059C10.6214 3.22115 10.6805 3.21068 10.7426 3.21068C10.8106 3.21068 10.8757 3.22414 10.9355 3.24657C11.0028 3.26826 11.0724 3.30789 11.1397 3.37669L15.516 7.94444V15.5177Z" fill="white"/>
            </svg>
          </div>
          <span>15 000 biens sélectionnés</span>
        </li>

      </ul>
    </div>
  </section>


  <!-- DESTINATIONS HIGHLIGHTS -->
  <section class="section-spacing">
    <div class="container">
      <h3 class="h4">Les destinations en vogue </h3>
      <div class='flexbox'>

        <?php require('./snippets/destination-item.php'); ?>
        <?php require('./snippets/destination-item.php'); ?>
        <?php require('./snippets/destination-item.php'); ?>
        <?php require('./snippets/destination-item.php'); ?>

      </div>
    </div>
  </section>

  <!-- ICONS -->
  <section>
    <div class="container">
      <h2 class='h4'>Laissez-vous inspirer</h2>
      <div class='flexbox liste-sejours'>

        <!-- sejour item-->
        <a href="#" class='ico col-lg-2 bg_blue'>
          <div class='circle circle-big bg_white'>
            <svg class='blue' width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.8461 9.16864L12.2562 2.2901C11.8486 1.87206 11.299 1.65519 10.7403 1.66715C10.1817 1.65444 9.6313 1.87131 9.22448 2.2901L2.51869 9.16864C2.40278 9.28754 2.40577 9.47749 2.52467 9.59266L3.21043 10.2605C3.32934 10.3764 3.51929 10.3734 3.63445 10.2545L4.34564 9.5246V16.7741C4.34564 16.9401 4.48025 17.0739 4.64552 17.0739H8.35551L8.357 18.0334C8.357 18.1994 8.49161 18.3333 8.65688 18.3333H9.6141C9.78012 18.3333 9.91398 18.1987 9.91398 18.0334V17.0739H16.7738C16.9398 17.0739 17.0737 16.9393 17.0737 16.7741V9.56947L17.7303 10.2545C17.8462 10.3734 18.0354 10.3756 18.1543 10.2605L18.8401 9.59266C18.959 9.47674 18.9612 9.28754 18.8461 9.16864ZM9.91398 15.5177V12.1457L11.4523 12.1413L11.4583 15.5177H9.91398ZM15.516 15.5177H13.0152L13.007 10.8804C13.007 10.7144 12.8724 10.5805 12.7071 10.5805H11.7499C11.7424 10.5805 11.7349 10.582 11.7275 10.5828L9.67094 10.5888C9.64925 10.5835 9.62682 10.5805 9.60363 10.5805H8.64641C8.48039 10.5805 8.34653 10.7151 8.34653 10.8804L8.35326 15.5177H5.90262V7.92799L10.3395 3.37669C10.4158 3.29892 10.4913 3.25928 10.5661 3.24059C10.6214 3.22115 10.6805 3.21068 10.7426 3.21068C10.8106 3.21068 10.8757 3.22414 10.9355 3.24657C11.0028 3.26826 11.0724 3.30789 11.1397 3.37669L15.516 7.94444V15.5177Z" fill="white"/>
            </svg>
          </div>
          <span class='size-large'>À la neige</span>
        </a>

        <!-- sejour item-->
        <a href="#" class='ico col-lg-2 bg_blue'>
          <div class='circle circle-big bg_white'>
            <svg class='blue' width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.8461 9.16864L12.2562 2.2901C11.8486 1.87206 11.299 1.65519 10.7403 1.66715C10.1817 1.65444 9.6313 1.87131 9.22448 2.2901L2.51869 9.16864C2.40278 9.28754 2.40577 9.47749 2.52467 9.59266L3.21043 10.2605C3.32934 10.3764 3.51929 10.3734 3.63445 10.2545L4.34564 9.5246V16.7741C4.34564 16.9401 4.48025 17.0739 4.64552 17.0739H8.35551L8.357 18.0334C8.357 18.1994 8.49161 18.3333 8.65688 18.3333H9.6141C9.78012 18.3333 9.91398 18.1987 9.91398 18.0334V17.0739H16.7738C16.9398 17.0739 17.0737 16.9393 17.0737 16.7741V9.56947L17.7303 10.2545C17.8462 10.3734 18.0354 10.3756 18.1543 10.2605L18.8401 9.59266C18.959 9.47674 18.9612 9.28754 18.8461 9.16864ZM9.91398 15.5177V12.1457L11.4523 12.1413L11.4583 15.5177H9.91398ZM15.516 15.5177H13.0152L13.007 10.8804C13.007 10.7144 12.8724 10.5805 12.7071 10.5805H11.7499C11.7424 10.5805 11.7349 10.582 11.7275 10.5828L9.67094 10.5888C9.64925 10.5835 9.62682 10.5805 9.60363 10.5805H8.64641C8.48039 10.5805 8.34653 10.7151 8.34653 10.8804L8.35326 15.5177H5.90262V7.92799L10.3395 3.37669C10.4158 3.29892 10.4913 3.25928 10.5661 3.24059C10.6214 3.22115 10.6805 3.21068 10.7426 3.21068C10.8106 3.21068 10.8757 3.22414 10.9355 3.24657C11.0028 3.26826 11.0724 3.30789 11.1397 3.37669L15.516 7.94444V15.5177Z" fill="white"/>
            </svg>
          </div>
          <span class='size-large'>À la neige</span>
        </a>

        <!-- sejour item-->
        <a href="#" class='ico col-lg-2 bg_blue'>
          <div class='circle circle-big bg_white'>
            <svg class='blue' width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.8461 9.16864L12.2562 2.2901C11.8486 1.87206 11.299 1.65519 10.7403 1.66715C10.1817 1.65444 9.6313 1.87131 9.22448 2.2901L2.51869 9.16864C2.40278 9.28754 2.40577 9.47749 2.52467 9.59266L3.21043 10.2605C3.32934 10.3764 3.51929 10.3734 3.63445 10.2545L4.34564 9.5246V16.7741C4.34564 16.9401 4.48025 17.0739 4.64552 17.0739H8.35551L8.357 18.0334C8.357 18.1994 8.49161 18.3333 8.65688 18.3333H9.6141C9.78012 18.3333 9.91398 18.1987 9.91398 18.0334V17.0739H16.7738C16.9398 17.0739 17.0737 16.9393 17.0737 16.7741V9.56947L17.7303 10.2545C17.8462 10.3734 18.0354 10.3756 18.1543 10.2605L18.8401 9.59266C18.959 9.47674 18.9612 9.28754 18.8461 9.16864ZM9.91398 15.5177V12.1457L11.4523 12.1413L11.4583 15.5177H9.91398ZM15.516 15.5177H13.0152L13.007 10.8804C13.007 10.7144 12.8724 10.5805 12.7071 10.5805H11.7499C11.7424 10.5805 11.7349 10.582 11.7275 10.5828L9.67094 10.5888C9.64925 10.5835 9.62682 10.5805 9.60363 10.5805H8.64641C8.48039 10.5805 8.34653 10.7151 8.34653 10.8804L8.35326 15.5177H5.90262V7.92799L10.3395 3.37669C10.4158 3.29892 10.4913 3.25928 10.5661 3.24059C10.6214 3.22115 10.6805 3.21068 10.7426 3.21068C10.8106 3.21068 10.8757 3.22414 10.9355 3.24657C11.0028 3.26826 11.0724 3.30789 11.1397 3.37669L15.516 7.94444V15.5177Z" fill="white"/>
            </svg>
          </div>
          <span class='size-large'>À la neige</span>
        </a>

        <!-- sejour item-->
        <a href="#" class='ico col-lg-2 bg_blue'>
          <div class='circle circle-big bg_white'>
            <svg class='blue' width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.8461 9.16864L12.2562 2.2901C11.8486 1.87206 11.299 1.65519 10.7403 1.66715C10.1817 1.65444 9.6313 1.87131 9.22448 2.2901L2.51869 9.16864C2.40278 9.28754 2.40577 9.47749 2.52467 9.59266L3.21043 10.2605C3.32934 10.3764 3.51929 10.3734 3.63445 10.2545L4.34564 9.5246V16.7741C4.34564 16.9401 4.48025 17.0739 4.64552 17.0739H8.35551L8.357 18.0334C8.357 18.1994 8.49161 18.3333 8.65688 18.3333H9.6141C9.78012 18.3333 9.91398 18.1987 9.91398 18.0334V17.0739H16.7738C16.9398 17.0739 17.0737 16.9393 17.0737 16.7741V9.56947L17.7303 10.2545C17.8462 10.3734 18.0354 10.3756 18.1543 10.2605L18.8401 9.59266C18.959 9.47674 18.9612 9.28754 18.8461 9.16864ZM9.91398 15.5177V12.1457L11.4523 12.1413L11.4583 15.5177H9.91398ZM15.516 15.5177H13.0152L13.007 10.8804C13.007 10.7144 12.8724 10.5805 12.7071 10.5805H11.7499C11.7424 10.5805 11.7349 10.582 11.7275 10.5828L9.67094 10.5888C9.64925 10.5835 9.62682 10.5805 9.60363 10.5805H8.64641C8.48039 10.5805 8.34653 10.7151 8.34653 10.8804L8.35326 15.5177H5.90262V7.92799L10.3395 3.37669C10.4158 3.29892 10.4913 3.25928 10.5661 3.24059C10.6214 3.22115 10.6805 3.21068 10.7426 3.21068C10.8106 3.21068 10.8757 3.22414 10.9355 3.24657C11.0028 3.26826 11.0724 3.30789 11.1397 3.37669L15.516 7.94444V15.5177Z" fill="white"/>
            </svg>
          </div>
          <span class='size-large'>À la neige</span>
        </a>

        <!-- sejour item-->
        <a href="#" class='ico col-lg-2 bg_blue'>
          <div class='circle circle-big bg_white'>
            <svg class='blue' width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.8461 9.16864L12.2562 2.2901C11.8486 1.87206 11.299 1.65519 10.7403 1.66715C10.1817 1.65444 9.6313 1.87131 9.22448 2.2901L2.51869 9.16864C2.40278 9.28754 2.40577 9.47749 2.52467 9.59266L3.21043 10.2605C3.32934 10.3764 3.51929 10.3734 3.63445 10.2545L4.34564 9.5246V16.7741C4.34564 16.9401 4.48025 17.0739 4.64552 17.0739H8.35551L8.357 18.0334C8.357 18.1994 8.49161 18.3333 8.65688 18.3333H9.6141C9.78012 18.3333 9.91398 18.1987 9.91398 18.0334V17.0739H16.7738C16.9398 17.0739 17.0737 16.9393 17.0737 16.7741V9.56947L17.7303 10.2545C17.8462 10.3734 18.0354 10.3756 18.1543 10.2605L18.8401 9.59266C18.959 9.47674 18.9612 9.28754 18.8461 9.16864ZM9.91398 15.5177V12.1457L11.4523 12.1413L11.4583 15.5177H9.91398ZM15.516 15.5177H13.0152L13.007 10.8804C13.007 10.7144 12.8724 10.5805 12.7071 10.5805H11.7499C11.7424 10.5805 11.7349 10.582 11.7275 10.5828L9.67094 10.5888C9.64925 10.5835 9.62682 10.5805 9.60363 10.5805H8.64641C8.48039 10.5805 8.34653 10.7151 8.34653 10.8804L8.35326 15.5177H5.90262V7.92799L10.3395 3.37669C10.4158 3.29892 10.4913 3.25928 10.5661 3.24059C10.6214 3.22115 10.6805 3.21068 10.7426 3.21068C10.8106 3.21068 10.8757 3.22414 10.9355 3.24657C11.0028 3.26826 11.0724 3.30789 11.1397 3.37669L15.516 7.94444V15.5177Z" fill="white"/>
            </svg>
          </div>
          <span class='size-large'>À la neige</span>
        </a>

        <!-- sejour item-->
        <a href="#" class='ico col-lg-2 bg_blue'>
          <div class='circle circle-big bg_white'>
            <svg class='blue' width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.8461 9.16864L12.2562 2.2901C11.8486 1.87206 11.299 1.65519 10.7403 1.66715C10.1817 1.65444 9.6313 1.87131 9.22448 2.2901L2.51869 9.16864C2.40278 9.28754 2.40577 9.47749 2.52467 9.59266L3.21043 10.2605C3.32934 10.3764 3.51929 10.3734 3.63445 10.2545L4.34564 9.5246V16.7741C4.34564 16.9401 4.48025 17.0739 4.64552 17.0739H8.35551L8.357 18.0334C8.357 18.1994 8.49161 18.3333 8.65688 18.3333H9.6141C9.78012 18.3333 9.91398 18.1987 9.91398 18.0334V17.0739H16.7738C16.9398 17.0739 17.0737 16.9393 17.0737 16.7741V9.56947L17.7303 10.2545C17.8462 10.3734 18.0354 10.3756 18.1543 10.2605L18.8401 9.59266C18.959 9.47674 18.9612 9.28754 18.8461 9.16864ZM9.91398 15.5177V12.1457L11.4523 12.1413L11.4583 15.5177H9.91398ZM15.516 15.5177H13.0152L13.007 10.8804C13.007 10.7144 12.8724 10.5805 12.7071 10.5805H11.7499C11.7424 10.5805 11.7349 10.582 11.7275 10.5828L9.67094 10.5888C9.64925 10.5835 9.62682 10.5805 9.60363 10.5805H8.64641C8.48039 10.5805 8.34653 10.7151 8.34653 10.8804L8.35326 15.5177H5.90262V7.92799L10.3395 3.37669C10.4158 3.29892 10.4913 3.25928 10.5661 3.24059C10.6214 3.22115 10.6805 3.21068 10.7426 3.21068C10.8106 3.21068 10.8757 3.22414 10.9355 3.24657C11.0028 3.26826 11.0724 3.30789 11.1397 3.37669L15.516 7.94444V15.5177Z" fill="white"/>
            </svg>
          </div>
          <span class='size-large'>À la neige</span>
        </a>

      </div>
    </div>
  </section>

  <!-- CARDS VERTICAL -->
  <section class="section-spacing">
    <div class="container">
      <h3 class="h3">Nos séjours populaires</h3>
      <div class='flexbox cards-container c-vertical'>

        <?php require('./snippets/card-item-vertical.php'); ?>
        <?php require('./snippets/card-item-vertical.php'); ?>
        <?php require('./snippets/card-item-vertical.php'); ?>
        <?php require('./snippets/card-item-vertical.php'); ?>

      </div>
    </div>
  </section>



  <!-- CARDS HORIZONTAL -->
  <section class="section-spacing">
    <div class="container container--narrow">
      <h3 class="h3">Les destinations en vogue </h3>
      <div class='flexbox cards-container c-horizontal'>

        <?php require('./snippets/card-item-horizontal.php'); ?>
        <?php require('./snippets/card-item-horizontal.php'); ?>        
        
      </div>
    </div>
  </section>

  <!-- INSTAGRAM FEED -->
  <section class="section-spacing">
    <div class="container text-center">
      <h3 class="h3">Ils partagent leurs vacances sur instagram</h3>
      <?php require('./sections/instagram.php'); ?>        
    </div>
  </section>



  <!-- Fonts -->
  <section class="section-spacing">
    <div class="container">
      <h2 class="h1">Laissez-vous inspirer</h2>
      <h2 class="h2">Laissez-vous inspirer</h2>
      <h2 class="h3">Laissez-vous inspirer</h2>
      <h2 class="h4">Laissez-vous inspirer</h2>
      <h2 class="h5">Laissez-vous inspirer</h2>
      <h2 class="h6">Laissez-vous inspirer</h2>

      <p class='size-big bold'>Le branding insuffle du sens à votre marque et provoque de l’émotion à vos clients.<br>Comprendre votre secteur, vos valeurs, vos ambitions nous permet de concevoir des moodboards pertinents. Sur cette base, nous pouvons alors déployer une identité visuelle unique et mémorable dont les principes de base sont condensés dans un Brandbook.</p>
      <p class='size-big'>Le branding insuffle du sens à votre marque et provoque de l’émotion à vos clients.<br>Comprendre votre secteur, vos valeurs, vos ambitions nous permet de concevoir des moodboards pertinents. Sur cette base, nous pouvons alors déployer une identité visuelle unique et mémorable dont les principes de base sont condensés dans un Brandbook.</p>

      <p class='size-large'>Le branding insuffle du sens à votre marque et provoque de l’émotion à vos clients.<br>Comprendre votre secteur, vos valeurs, vos ambitions nous permet de concevoir des moodboards pertinents. Sur cette base, nous pouvons alors déployer une identité visuelle unique et mémorable dont les principes de base sont condensés dans un Brandbook.</p>

      <p>Le branding insuffle du sens à votre marque et provoque de l’émotion à vos clients.<br>Comprendre votre secteur, vos valeurs, vos ambitions nous permet de concevoir des moodboards pertinents. Sur cette base, nous pouvons alors déployer une identité visuelle unique et mémorable dont les principes de base sont condensés dans un Brandbook.</p>

      <p class='size-tiny'>Le branding insuffle du sens à votre marque et provoque de l’émotion à vos clients.<br>Comprendre votre secteur, vos valeurs, vos ambitions nous permet de concevoir des moodboards pertinents. Sur cette base, nous pouvons alors déployer une identité visuelle unique et mémorable dont les principes de base sont condensés dans un Brandbook.</p>

      <a class='button button--primary'>Découvrir</a>
      <a class='button button--outlined'>Découvrir</a>
      <a class='button button--primary full-w'>Découvrir</a>
      <p class='link'>Lire la suite</p>
    </div>
  </section>










  <!-- LOGIN -->
  <section class="section-spacing">
    <div class="container container--narrow">
      <h1 class="h2 text-center">J’ai un compte les stations.com</h1>
      <form method="post" action="/login?redirect=%2Fmember" class="adminForm">
        <input type="email" name="email" id="email" placeholder="E-mail" required="">
        <input type="password" name="password" id="password" placeholder="Password" required="">
        <div class="linkBox text-center full-w">
          <button class="button button--primary full-w">Login</button>
          <a href="/forget-password" class="link">I've forgotten my password</a>
        </div>
      </form>
      <form>
        <!-- CARBON DESIGN -->
        <div class="bx--form-item full-w">
          <label for="text-area-2" class="bx--label">Text Area label</label>
          <div class="bx--text-area__wrapper">
            <textarea id="text-area-2" class="bx--text-area bx--text-area--v2" rows="4" cols="50" placeholder="Placeholder text."></textarea>
          </div>
        </div>

        <div class="bx--form-item full-w">
          <label for="text-input-2" class="bx--label bx--label--disabled">Text field label</label>
          <input id="text-input-2" type="text" class="bx--text-input" placeholder="Hint text here" disabled>
        </div>

        <div class="bx--form-item full-w">
          <input class="bx--toggle" id="toggle1" type="checkbox">
          <label class="bx--toggle__label" for="toggle1">
            <span class="bx--toggle__text--left" aria-hidden="true">Off</span>
            <span class="bx--toggle__appearance"></span>
            <span class="bx--toggle__text--right" aria-hidden="true">On</span>
          </label>
        </div>

        <div class="bx--form-item full-w">
          <div class="bx--select bx--select--inline">
            <label for="select-id" class="bx--label">Select label</label>
            <div class="bx--select-input--inline__wrapper">
              <div class="bx--select-input__wrapper">
                <select id="select-id" class="bx--select-input">
                  <option class="bx--select-option" value=""  disabled selected hidden>
                    Choose an option
                  </option>
                  <option class="bx--select-option" value="solong" >
                    A much longer option that is worth having around to check how text flows
                  </option>
                  <optgroup class="bx--select-optgroup" label="Category 1">
                    <option class="bx--select-option" value="option1" >
                      Option 1
                    </option>
                    <option class="bx--select-option" value="option2" >
                      Option 2
                    </option>
                  </optgroup>
                  <optgroup class="bx--select-optgroup" label="Category 2">
                    <option class="bx--select-option" value="option1" >
                      Option 1
                    </option>
                    <option class="bx--select-option" value="option2" >
                      Option 2
                    </option>
                  </optgroup>
                </select>
                <svg focusable="false" preserveAspectRatio="xMidYMid meet" style="will-change: transform;" xmlns="http://www.w3.org/2000/svg" class="bx--select__arrow" width="10" height="6" viewBox="0 0 10 6" aria-hidden="true"><path d="M5 6L0 1 .7.3 5 4.6 9.3.3l.7.7z"></path></svg>
              </div>
            </div>
            <div class="bx--form__helper-text">Optional helper text.</div>
          </div>
        </div>

        <style>
          .bx--radio-button-wrapper.bx--radio-button-wrapper--label-left .bx--radio-button__label {flex-direction: initial;}
        </style>
        <fieldset class="bx--fieldset full-w">
          <legend class="bx--label">Radio button label</legend>
          <div class="bx--form-item">
            <div class="bx--radio-button-group  bx--radio-button-group--vertical ">
              <div class="bx--radio-button-wrapper bx--radio-button-wrapper--label-left">
                <input id="radio-button-k28vytvnprc-1" class="bx--radio-button" type="radio" value="red" name="radio-button--vertical" tabindex="0" checked>
                <label for="radio-button-k28vytvnprc-1" class="bx--radio-button__label">
                    <span class="bx--radio-button__appearance"></span>
                    <span class="bx--radio-button__label-text">Radio button label</span>
                  </label>
              </div>
              <div class="bx--radio-button-wrapper bx--radio-button-wrapper--label-left">
                <input id="radio-button-k28vytvnprc-2" class="bx--radio-button" type="radio" value="green" name="radio-button--vertical" tabindex="0">
                <label for="radio-button-k28vytvnprc-2" class="bx--radio-button__label">
                    <span class="bx--radio-button__appearance"></span>
                    <span class="bx--radio-button__label-text">Radio button label</span>
                  </label>
              </div>
              <div class="bx--radio-button-wrapper bx--radio-button-wrapper--label-left">
                <input id="radio-button-k28vytvnprc-3" class="bx--radio-button" type="radio" value="blue" name="radio-button--vertical" tabindex="0" disabled>
                <label for="radio-button-k28vytvnprc-3" class="bx--radio-button__label">
                    <span class="bx--radio-button__appearance"></span>
                    <span class="bx--radio-button__label-text">Radio button label</span>
                  </label>
              </div>
            </div>
          </div>
        </fieldset>

        <input type="range" min="0" max="10000" step="100" value="200" oninput="this.parentNode.style.setProperty('--value',this.value); this.parentNode.style.setProperty('--text-value', JSON.stringify((+this.value).toLocaleString()))">


        <div class="bx--form-item full-w">
          <label class="bx--label ">
            Slider label
          </label>
          <div class="bx--slider-container">
            <label id="slider-input-box_bottom-range-label" class="bx--slider__range-label">0</label>
            <div class="bx--slider " data-slider data-slider-input-box="#slider-input-box">
              <div class="bx--slider__thumb" tabindex="0"></div>
              <div class="bx--slider__track"></div>
              <div class="bx--slider__filled-track"></div>
              <input aria-label="slider" id="slider" class="bx--slider__input" type="range" step="1" min="0" max="100" value="25">
            </div>
            <label id="slider-input-box_top-range-label" class="bx--slider__range-label">100</label>
            <input id="slider-input-box" aria-labelledby="slider-input-box_bottom-range-label slider-input-box_top-range-label" type="number" class="bx--text-input bx--slider-text-input" placeholder="0" value="25">
          </div>
        </div>







        <!-- Tooltip -->
        <div id="tooltip-label" class="bx--tooltip__label" aria-describedby="unique-tooltip">
          Tooltip label
          <div tabindex="0" aria-labelledby="tooltip-label" data-tooltip-trigger data-tooltip-target="#unique-tooltip" role="tooltip" class="bx--tooltip__trigger">
            <svg focusable="false" preserveAspectRatio="xMidYMid meet" style="will-change: transform;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><path d="M8.5 11V6.5h-2v1h1V11H6v1h4v-1zM8 3.5c-.4 0-.8.3-.8.8s.4.7.8.7.8-.3.8-.8-.4-.7-.8-.7z"></path><path d="M8 15c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7zM8 2C4.7 2 2 4.7 2 8s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6z"></path></svg>
          </div>
        </div>
        <div id="unique-tooltip" data-floating-menu-direction="bottom" class="bx--tooltip" data-avoid-focus-on-open>
          <span class="bx--tooltip__caret"></span>
          <p>This is some tooltip text. This box shows the maximum amount of text that should appear inside. If more room is needed please use a modal instead.</p>
          <div class="bx--tooltip__footer">
            <a href="#" class="bx--link">Learn More</a>
            <button class="bx--btn bx--btn--primary bx--btn--sm" type="button">Create</button>
          </div>
        </div>



        <!-- info -->  
        <div class="bx--tooltip--icon">
          <button class="bx--tooltip__trigger bx--tooltip--icon__bottom" aria-label="Filter">
              <svg focusable="false" preserveAspectRatio="xMidYMid meet" style="will-change: transform;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><path d="M15 4h-2.1c-.2-1.1-1.2-2-2.4-2s-2.2.9-2.4 2H1v1h7.1c.2 1.1 1.2 2 2.4 2s2.2-.9 2.4-2H15V4zm-4.5 2C9.7 6 9 5.3 9 4.5S9.7 3 10.5 3s1.5.7 1.5 1.5S11.3 6 10.5 6zM1 12h2.1c.2 1.1 1.2 2 2.4 2s2.2-.9 2.4-2H15v-1H7.9c-.2-1.1-1.2-2-2.4-2s-2.2.9-2.4 2H1v1zm4.5-2c.8 0 1.5.7 1.5 1.5S6.3 13 5.5 13 4 12.3 4 11.5 4.7 10 5.5 10z"></path></svg>
          </button>
        </div>

        <div class="bx--tooltip--definition">
          <button class="bx--tooltip__trigger" type="button" aria-describedby="definition-tooltip">
            Definition Tooltip
          </button>
          <div id="definition-tooltip" role="tooltip" class="bx--tooltip--definition__bottom">
            <span class="bx--tooltip__caret"></span>
            <p>Brief description of the dotted, underlined word above.</p>
          </div>
        </div>









        <input type="email" name="email" id="email" placeholder="E-mail" required="">
        <select>
          <option value="Value 1">Value 1</option>
          <option value="Value 2">Value 2</option>
          <option value="Value 3">Value 3</option>
          <option value="Value 4">Value 4</option>
        </select>

        <div class="checkbox-container">
          <input type="checkbox" name="Newsletter" id="newsletter" required="">
          <label for="newsletter">J’accepte de recevoir les newsletters lesstations.com</label>
        </div>

        <div class="checkbox-container">
          <input name="sexe" id="homme" type="radio" class="radio_btn" value="Homme" checked="">
          <label for="homme" class="radio_btnLabel" data-image="">M.</label>
          <input name="sexe" id="femme" type="radio" class="radio_btn" value="Femme" checked="">
          <label for="femme" class="radio_btnLabel" data-image="">Mme.</label>
        </div>
      </form>
    </div>
  </section>






<!-- END CONTENT --> 
<?php require('./sections/footer.php'); ?>




