using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

using Android.App;
using Android.Content;
using Android.OS;
using Android.Runtime;
using Android.Views;
using Android.Widget;

namespace AppAlfa
{
    [Activity(Label = "PagAlunoA")]
    public class PagAlunoA : Activity
    {
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            SetContentView(Resource.Layout.PagAlunoA);
            //-----------------
            Button CalAulas = FindViewById<Button>(Resource.Id.CalAulas);
            Button Exercicios = FindViewById<Button>(Resource.Id.Exercicios);
            Button Tarefas = FindViewById<Button>(Resource.Id.Tarefas);
            Button PalavraAprendida = FindViewById<Button>(Resource.Id.PalavraAprendida);


        }
    }
}