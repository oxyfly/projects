import { Component, OnInit } from '@angular/core';
import {AppService} from '../app.service';

@Component({
  selector: 'app-albums',
  templateUrl: './albums.component.html',
  styleUrls: ['./albums.component.css']
})
export class AlbumsComponent implements OnInit {

  title = 'Music Store';
  public albums;

  constructor(private appService: AppService) {}

  ngOnInit() {
    this.appService.getAlbums().subscribe(res => {
      this.albums = res;
    });
  }
}

