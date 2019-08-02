using Android.App;
using Android.OS;
using Android.Support.V7.App;
using Android.Runtime;
using Android.Content;
using Android.Widget;

namespace AppAlfa
{
    [Activity(Label = "@string/app_name", Theme = "@style/AppTheme", MainLauncher = true)]
    public class MainActivity : AppCompatActivity
    {
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            Xamarin.Essentials.Platform.Init(this, savedInstanceState);
            // Setar o Layout
            SetContentView(Resource.Layout.activity_main);
            // --------------

            //Trecho De Trocar Ativity
            Button Aluno = FindViewById<Button>(Resource.Id.Aluno);
            Button AlunoV = FindViewById<Button>(Resource.Id.AlunoV);
            Button Professor = FindViewById<Button>(Resource.Id.Professor);
            Aluno.Click += delegate {
                SetContentView(Resource.Layout.SingInOrUp);
                Intent Intent = new Intent(this, typeof(SingInOrUp));
                StartActivity(Intent);
            };
            AlunoV.Click += delegate {
                SetContentView(Resource.Layout.SingInOrUp);
                Intent Intent = new Intent(this, typeof(SingInOrUp));
                StartActivity(Intent);
            };
            Professor.Click += delegate {
                SetContentView(Resource.Layout.SingInOrUp);
                Intent Intent = new Intent(this, typeof(SingInOrUp));
                StartActivity(Intent);
            };
            //------------------------



        }
        public override void OnRequestPermissionsResult(int requestCode, string[] permissions, [GeneratedEnum] Android.Content.PM.Permission[] grantResults)
        {
            Xamarin.Essentials.Platform.OnRequestPermissionsResult(requestCode, permissions, grantResults);

            base.OnRequestPermissionsResult(requestCode, permissions, grantResults);
        }
    }
}