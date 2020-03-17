import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { OurVisionComponent } from './our-vision/our-vision.component';


const routes: Routes = [
  {path:'our-vision', component: OurVisionComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
