import { Component, OnInit } from '@angular/core';
import {ActivatedRoute} from '@angular/router';

@Component({
  selector: 'app-album-detail',
  templateUrl: './album-detail.component.html',
  styleUrls: ['./album-detail.component.css']
})
export class AlbumDetailComponent implements OnInit {
  public albumId;



  constructor(private activeRoute: ActivatedRoute) {
    this.activeRoute.params.subscribe((params) => this.albumId = params.id);

  }

  ngOnInit() {
    console.log('Перешел на роутер', this.albumId); // for me
  }
}
