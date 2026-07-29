import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { ItaliaPage } from './italia.page';

const routes: Routes = [
  {
    path: '',
    component: ItaliaPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ItaliaPageRoutingModule {}
