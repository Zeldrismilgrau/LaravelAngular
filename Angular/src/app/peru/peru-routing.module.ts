import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { PeruPage } from './peru.page';

const routes: Routes = [
  {
    path: '',
    component: PeruPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class PeruPageRoutingModule {}
