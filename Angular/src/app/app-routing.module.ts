import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: 'home',
    loadChildren: () => import('./home/home.module').then( m => m.HomePageModule)
  },
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full'
  },  {
    path: 'brasil',
    loadChildren: () => import('./brasil/brasil.module').then( m => m.BrasilPageModule)
  },
  {
    path: 'india',
    loadChildren: () => import('./india/india.module').then( m => m.IndiaPageModule)
  },
  {
    path: 'china',
    loadChildren: () => import('./china/china.module').then( m => m.ChinaPageModule)
  },
  {
    path: 'mexico',
    loadChildren: () => import('./mexico/mexico.module').then( m => m.MexicoPageModule)
  },
  {
    path: 'peru',
    loadChildren: () => import('./peru/peru.module').then( m => m.PeruPageModule)
  },
  {
    path: 'italia',
    loadChildren: () => import('./italia/italia.module').then( m => m.ItaliaPageModule)
  },
  {
    path: 'jordania',
    loadChildren: () => import('./jordania/jordania.module').then( m => m.JordaniaPageModule)
  }

];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
