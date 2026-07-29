import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { JordaniaPage } from './jordania.page';

const routes: Routes = [
  {
    path: '',
    component: JordaniaPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class JordaniaPageRoutingModule {}
