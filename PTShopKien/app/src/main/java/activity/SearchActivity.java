package activity;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.ListView;

import com.example.ntd.shopping.R;

import java.util.ArrayList;

import adapter.LaptopAdapter;
import model.Product;

public class SearchActivity extends AppCompatActivity {
    Toolbar toolbar;
    ListView lvl;
    LaptopAdapter laptopAdapter;
    ArrayList<Product> manglaptop;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_search);
        initView();
        ActionToolbar();
    }

    private void initView() {
        toolbar=findViewById(R.id.toolbarsearch);
        lvl=findViewById(R.id.listviewsearch);

    }
    private void ActionToolbar() {
        setSupportActionBar(toolbar);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        toolbar.setNavigationOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                finish();
            }
        });
    }
}