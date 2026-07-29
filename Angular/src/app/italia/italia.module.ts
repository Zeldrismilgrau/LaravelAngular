import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { ItaliaPageRoutingModule } from './italia-routing.module';

import { ItaliaPage } from './italia.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    ItaliaPageRoutingModule
  ],
  declarations: [ItaliaPage]
})
export class ItaliaPageModule {}
