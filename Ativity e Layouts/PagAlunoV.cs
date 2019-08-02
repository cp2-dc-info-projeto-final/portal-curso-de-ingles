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
    [Activity(Label = "PagAlunoV")]
    public class PagAlunoV : Activity
    {
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            SetContentView(Resource.Layout.PagAlunoV);
            //-----------------
            Button Exercicios = FindViewById<Button>(Resource.Id.Exercicios);
            Button PalavraAprendida = FindViewById<Button>(Resource.Id.PalavraAprendida);


        }
    }
}