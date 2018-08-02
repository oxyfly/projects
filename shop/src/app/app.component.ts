import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title = 'Music Store';
  ngOnInit() {
    const click = document.getElementById('btn');
    click.addEventListener('click', function () {
      alert('DONE');
    });
  }
}

