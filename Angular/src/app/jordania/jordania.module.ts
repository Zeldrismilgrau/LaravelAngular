import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { JordaniaPageRoutingModule } from './jordania-routing.module';

import { JordaniaPage } from './jordania.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    JordaniaPageRoutingModule
  ],
  declarations: [JordaniaPage]
})
export class JordaniaPageModule {}
