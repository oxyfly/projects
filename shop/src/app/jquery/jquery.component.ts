import { Component, OnInit } from '@angular/core';
import * as $ from 'jquery';

@Component({
  selector: 'app-jquery',
  templateUrl: './jquery.component.html',
  styleUrls: ['./jquery.component.css']
})
export class JqueryComponent implements OnInit {
  title = 'jQuery';

  constructor() { }

  public ngOnInit() {
    /* SCROLL */
    $(document).ready(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $('.footer-info').fadeIn();
        } else {
          $('.footer-info').fadeOut();
        }
      });
      $('.footer-info').click(function () {
        $('html, body').animate({scrollTop: 0}, 600);
        return false;
      });
    });
  }
}
