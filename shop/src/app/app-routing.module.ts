import {RouterModule, Routes} from '@angular/router';
import {AppComponent} from './app.component';
import {NgModule} from '@angular/core';
import {AlbumDetailComponent} from './album-detail/album-detail.component';
import {AlbumsComponent} from './albums/albums.component';

const routes: Routes = [
  {path: '', component: AlbumsComponent},
  {path: 'album', component: AppComponent},
  {path: 'album/:id', component: AlbumDetailComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
